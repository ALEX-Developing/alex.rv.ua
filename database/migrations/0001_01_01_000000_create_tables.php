<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');

            $table->timestamps();
        });
        
        Schema::create('professions', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('phone')->unique();
            $table->timestamp('phone_verified_at')->nullable();

            $table->string('password');

            $table->unsignedBigInteger('type_id')->default(1);
            $table->index('type_id', 'user_type_idx');
            $table->foreign('type_id', 'user_type_fk')->on('user_types')->references('id');

            $table->string('photo')->nullable();

            $table->unsignedBigInteger('profession_id')->nullable();
            $table->index('profession_id', 'user_profession_idx');
            $table->foreign('profession_id', 'user_profession_fk')->on('professions')->references('id');

            $table->unsignedInteger('total_payments')->default(0);
            $table->unsignedInteger('balance')->default(0);
            $table->unsignedInteger('refferal_code')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('phone')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('referrals', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('referrer_user_id');
            $table->unsignedBigInteger('referred_user_id');

            $table->index('referrer_user_id', 'referrer_user_idx');
            $table->index('referred_user_id', 'referred_user_idx');

            $table->foreign('referrer_user_id', 'referrer_user_fk')->on('users')->references('id');
            $table->foreign('referred_user_id', 'referred_user_fk')->on('users')->references('id');

            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('title');

            $table->string('domain')->nullable();
            $table->string('figma_link')->nullable();

            $table->timestamp('deadline')->nullable();

            $table->unsignedInteger('current_stage')->default(0);

            $table->boolean('is_published')->default(false);
            $table->boolean('is_awaiting_payment')->default(false);

            $table->timestamps();
        });

        Schema::create('stages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('project_id');
            $table->index('project_id', 'stage_project_idx');
            $table->foreign('project_id', 'stage_project_fk')->on('projects')->references('id');

            $table->unsignedInteger('percentage');

            $table->string('title');
            $table->string('description');

            $table->timestamp('date_start')->nullable();
            $table->timestamp('date_end')->nullable();

            $table->timestamps();
        });

        Schema::create('added_elements', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('stage_id');
            $table->index('stage_id', 'added_element_stage_idx');
            $table->foreign('stage_id', 'added_element_stage_fk')->on('stages')->references('id');

            $table->string('title');

            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('project_id');
            $table->index('project_id', 'payment_project_idx');
            $table->foreign('project_id', 'payment_project_fk')->on('projects')->references('id');

            $table->unsignedBigInteger('amount');

            $table->timestamp('scheduled_date')->nullable();
            $table->timestamp('execution_date')->nullable();
            $table->timestamp('deferred_date')->nullable();

            $table->timestamps();
        });

        Schema::create('user_project_types', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->timestamps();
        });

        Schema::create('user_project', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('project_id');

            $table->index('user_id', 'user_project_user_idx');
            $table->index('project_id', 'user_project_project_idx');

            $table->foreign('user_id', 'user_project_user_fk')->on('users')->references('id');
            $table->foreign('project_id', 'user_project_project_fk')->on('projects')->references('id');

            $table->unsignedBigInteger('user_project_type_id');
            $table->index('user_project_type_id', 'user_project_user_project_type_idx');
            $table->foreign('user_project_type_id', 'user_project_user_project_type_fk')->on('user_project_types')->references('id');

            $table->unsignedBigInteger('allowance_for_dev')->nullable();

            $table->timestamps();
        });

        Schema::create('discounts', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('description')->nullable();

            $table->unsignedInteger('percentage');

            $table->string('image_url')->nullable();

            $table->timestamp('valid_from')->nullable();
            $table->timestamp('valid_until')->nullable();

            $table->timestamps();
        });

        Schema::create('user_discount', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('discount_id');

            $table->index('user_id', 'discount_user_user_idx');
            $table->index('discount_id', 'discount_user_discount_idx');

            $table->foreign('user_id', 'discount_user_user_fk')->on('users')->references('id');
            $table->foreign('discount_id', 'discount_user_discount_fk')->on('discounts')->references('id');

            $table->timestamps();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('description')->nullable();

            $table->string('image_url')->nullable();

            $table->unsignedBigInteger('price_form');
            $table->unsignedBigInteger('price_to');

            $table->unsignedBigInteger('days_form');
            $table->unsignedBigInteger('days_to')->nullable();

            $table->boolean('is_popular')->default(false);

            $table->string('example_link');

            $table->timestamps();
        });

        Schema::create('service_project', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('project_id');

            $table->index('service_id', 'service_project_service_idx');
            $table->index('project_id', 'service_project_project_idx');

            $table->foreign('service_id', 'service_project_service_fk')->on('services')->references('id');
            $table->foreign('project_id', 'service_project_project_fk')->on('projects')->references('id');

            $table->timestamps();
        });

        Schema::create('discount_service', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('discount_id');
            $table->unsignedBigInteger('service_id');

            $table->index('discount_id', 'discount_service_discount_idx');
            $table->index('service_id', 'discount_service_service_idx');

            $table->foreign('discount_id', 'discount_service_discount_fk')->on('discounts')->references('id');
            $table->foreign('service_id', 'discount_service_service_fk')->on('services')->references('id');

            $table->timestamps();
        });

        Schema::create('example_prices', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('current_servece_id');
            $table->unsignedBigInteger('example_servece_id');

            $table->index('current_servece_id', 'current_servece_idx');
            $table->index('example_servece_id', 'example_servece_idx');

            $table->foreign('current_servece_id', 'current_servece_fk')->on('services')->references('id');
            $table->foreign('example_servece_id', 'example_servece_fk')->on('services')->references('id');

            $table->timestamps();
        });

        Schema::create('order_abouts', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->timestamps();
        });

        Schema::create('order_types', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->timestamps();
        });

        Schema::create('order_statuses', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->boolean('is_login')->default(false);

            $table->unsignedBigInteger('order_status_id')->default(1);
            $table->index('order_status_id', 'order_status_idx');
            $table->foreign('order_status_id', 'order_status_fk')->on('order_statuses')->references('id');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'order_user_idx');
            $table->foreign('user_id', 'order_user_fk')->on('users')->references('id');

            $table->unsignedBigInteger('phone');
            $table->string('name');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('budget')->nullable();

            $table->unsignedBigInteger('project_id')->nullable();
            $table->index('project_id', 'order_project_idx');
            $table->foreign('project_id', 'order_project_fk')->on('projects')->references('id');

            $table->unsignedBigInteger('order_about_id')->nullable();
            $table->index('order_about_id', 'order_order_about_idx');
            $table->foreign('order_about_id', 'order_order_about_fk')->on('order_abouts')->references('id');

            $table->unsignedBigInteger('order_type_id')->nullable();
            $table->index('order_type_id', 'order_project_type_idx');
            $table->foreign('order_type_id', 'order_project_type_fk')->on('order_types')->references('id');

            $table->unsignedBigInteger('service_id')->nullable();
            $table->index('service_id', 'service_idx');
            $table->foreign('service_id', 'service_fk')->on('services')->references('id');

            $table->timestamps();
        });

        Schema::create('transactions_history', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->default(1);
            $table->index('user_id', 'transaction_history_user_idx');
            $table->foreign('user_id', 'transaction_history_user_fk')->on('users')->references('id');

            $table->string('description');

            $table->string('type'); // values can be "in" or "out".

            $table->unsignedBigInteger('amount');

            $table->unsignedBigInteger('balance'); // balance at the time of the transaction

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
