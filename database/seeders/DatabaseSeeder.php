<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\UserTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('user_types')->insert([
            ['title' => 'client'],
            ['title' => 'dev'],
            ['title' => 'superadmin'],
        ]);

        DB::table('professions')->insert([
            ['title' => 'Front-End Dev'],
            ['title' => 'Back-End Dev'],
            ['title' => 'Full-Stack Dev'],
            ['title' => 'Ui/Ux Desighner'],
        ]);
        
        DB::table('users')->insert([
            [
                'name' => 'client',
                'phone' => 380686006631,
                'phone_verified_at' => '2024-07-07 17:17:17',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'type_id' => 1,
                'profession_id' => null,
                'balance' => 0,
            ],
            [
                'name' => 'developer',
                'phone' => 380686006632,
                'phone_verified_at' => '2024-07-07 17:17:17',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'type_id' => 2,
                'profession_id' => 3,
                'balance' => 0,
            ],
            [
                'name' => 'SuperAdmin',
                'phone' => 380686006633,
                'phone_verified_at' => '2024-07-07 17:17:17',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'type_id' => 3,
                'profession_id' => null,
                'balance' => 1000, // test balance
            ],
        ]);

        DB::table('user_project_types')->insert([
            ['title' => 'dev'],
            ['title' => 'owner'],
            ['title' => 'admin'],
            ['title' => 'supervisor'],
        ]);

        DB::table('order_abouts')->insert([
            ['title' => 'Щодо розробки лендінгу ...'],
            ['title' => 'Щодо розробки інтернет-магазину ...'],
        ]);

        DB::table('order_types')->insert([
            ['title' => 'header-footer ...'],
            ['title' => 'free-consultation ...'],
            ['title' => 'order-in-service ...'],
        ]);

        // // test transaction (income 100$)
        // $currentId = DB::table('users')->where('phone', '380686006633')->value('id');
        // $currentBalance = DB::table('users')->where('phone', '380686006633')->value('balance');
        // DB::table('transactions_history')->insert([
        //     'user_id' => $currentId,
        //     'description' => 'Test income',
        //     'type' => 'in',
        //     'amount' => 100,
        //     'balance' => $currentBalance + 100,
        // ]);
        // DB::table('users')->where('phone', '380686006633')->increment('balance', 100);
        // // test transaction (outcome 50$)
        // $currentBalance = DB::table('users')->where('phone', '380686006633')->value('balance');
        // DB::table('transactions_history')->insert([
        //     'user_id' => $currentId,
        //     'description' => 'Test outcome',
        //     'type' => 'out',
        //     'amount' => 50,
        //     'balance' => $currentBalance - 50,
        // ]);
        // DB::table('users')->where('phone', '380686006633')->decrement('balance', 50);


        echo "  ✅ Successfully seeded database \n \n";
    }
}
