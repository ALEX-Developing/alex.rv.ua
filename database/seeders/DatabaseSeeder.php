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

        DB::table('order_statuses')->insert([
            ['title' => 'new'],
            ['title' => 'done'],
            ['title' => 'fail'],
        ]);

        DB::table('projects')->insert([
            [
                'name' => 'ALEX-map',
                'title' => 'Карта відключень світла (м.Рівне)',
                'domain' => 'gordiichuk.com',
                'current_stage' => 100,
                'figma_link' => 'https://www.figma.com/design/0KrUnxsJuJJfjyeCFYUEQa/Building?m=dev&node-id=0%3A1&t=7N4QTk8QrjMBEOIi-1',
                'deadline' => '2023-01-20',
                'is_published' => true,
                'is_awaiting_payment' => false,
            ],
            [
                'name' => 'Evil-Lev_Development',
                'title' => 'Evil Lev Development (м.Львів)',
                'domain' => 'evil-lev.tech',
                'current_stage' => 100,
                'figma_link' => 'https://www.figma.com/file/tiZdT4dZ3gJ8X5t83rcy12/evil-lev.tech?type=design&node-id=0%3A1&mode=dev&t=iHTxNtlIYrQ4vtEq-1',
                'deadline' => '2024-05-10',
                'is_published' => true,
                'is_awaiting_payment' => false,
            ],
            [
                'name' => 'GreatHouse',
                'title' => 'ЖК "Great House" (м.Рівне)',
                'domain' => 'greathouse.rv.ua',
                'current_stage' => 70,
                'figma_link' => 'https://www.figma.com/design/0KrUnxsJuJJfjyeCFYUEQa/Building?m=dev&node-id=0%3A1&t=7N4QTk8QrjMBEOIi-1',
                'deadline' => '2024-06-15',
                'is_published' => true,
                'is_awaiting_payment' => false,
            ],
            [
                'name' => 'Khmilny-Chlyakh',
                'title' => 'Хмільний Шлях - Коктелі',
                'domain' => 'сhmilmilny.com',
                'current_stage' => 0,
                'figma_link' => 'https://www.figma.com/design/0KrUnxsJuJJfjyeCFYUEQa/Building?m=dev&node-id=0%3A1&t=7N4QTk8QrjMBEOIi-1',
                'deadline' => '2024-08-01',
                'is_published' => false,
                'is_awaiting_payment' => false,
            ],
            [
                'name' => 'Aobox',
                'title' => 'Інвестування нерухомості',
                'domain' => 'aobox.tech',
                'current_stage' => 100,
                'figma_link' => 'https://www.figma.com/file/tiZdT4dZ3gJ8X5t83rcy12/evil-lev.tech?type=design&node-id=0%3A1&mode=dev&t=iHTxNtlIYrQ4vtEq-1',
                'deadline' => '2023-02-10',
                'is_published' => true,
                'is_awaiting_payment' => false,
            ],
            [
                'name' => 'SuperBulka',
                'title' => 'Бургерна (м.Львів)',
                'domain' => 'superbulka.shop',
                'current_stage' => 100,
                'figma_link' => null,
                'deadline' => '2023-04-12',
                'is_published' => true,
                'is_awaiting_payment' => false,
            ],
            [
                'name' => 'Virtual-Cube',
                'title' => 'Сфера 3D послуг (м.Київ)',
                'domain' => 'virtual-cube.online',
                'current_stage' => 100,
                'figma_link' => null,
                'deadline' => '2023-05-10',
                'is_published' => true,
                'is_awaiting_payment' => true,
            ],
            [
                'name' => 'G-Drilling',
                'title' => 'Будівельні роботи та обладнення (м.Львів)',
                'domain' => 'g-drilling.tech',
                'current_stage' => 100,
                'figma_link' => null,
                'deadline' => '2023-06-25',
                'is_published' => true,
                'is_awaiting_payment' => true,
            ],
            [
                'name' => 'TurboSanok',
                'title' => 'Гумово-технічні вироби (м.Рівне)',
                'domain' => 'turbosanok.store',
                'current_stage' => 100,
                'figma_link' => 'https://www.figma.com/file/tiZdT4dZ3gJ8X5t83rcy12/evil-lev.tech?type=design&node-id=0%3A1&mode=dev&t=iHTxNtlIYrQ4vtEq-1',
                'deadline' => '2023-08-20',
                'is_published' => true,
                'is_awaiting_payment' => false,
            ],
            [
                'name' => 'MistoGreen',
                'title' => 'ЖК "Місто Грін" (м.Львів)',
                'domain' => 'mistogreen.site',
                'current_stage' => 100,
                'figma_link' => 'https://www.figma.com/file/tiZdT4dZ3gJ8X5t83rcy12/evil-lev.tech?type=design&node-id=0%3A1&mode=dev&t=iHTxNtlIYrQ4vtEq-1',
                'deadline' => '2023-11-15',
                'is_published' => true,
                'is_awaiting_payment' => false,
            ],
            [
                'name' => 'GreenVille_Park',
                'title' => 'ЖК "Greenlive Park" (м.Львів)',
                'domain' => 'greenla-park.site',
                'current_stage' => 100,
                'figma_link' => 'https://www.figma.com/file/tiZdT4dZ3gJ8X5t83rcy12/evil-lev.tech?type=design&node-id=0%3A1&mode=dev&t=iHTxNtlIYrQ4vtEq-1',
                'deadline' => '2024-02-25',
                'is_published' => true,
                'is_awaiting_payment' => false,
            ],
            [
                'name' => 'Smile-Dental-Club',
                'title' => 'Стоматологічні курси',
                'domain' => 'smile-dental-club.xyz',
                'current_stage' => 100,
                'figma_link' => 'https://www.figma.com/file/tiZdT4dZ3gJ8X5t83rcy12/evil-lev.tech?type=design&node-id=0%3A1&mode=dev&t=iHTxNtlIYrQ4vtEq-1',
                'deadline' => '2024-03-15',
                'is_published' => true,
                'is_awaiting_payment' => false,
            ],
            [
                'name' => 'G-Vision',
                'title' => 'Стоматологія',
                'domain' => 'g-vision.tech',
                'current_stage' => 100,
                'figma_link' => 'https://www.figma.com/file/tiZdT4dZ3gJ8X5t83rcy12/evil-lev.tech?type=design&node-id=0%3A1&mode=dev&t=iHTxNtlIYrQ4vtEq-1',
                'deadline' => '2024-04-20',
                'is_published' => true,
                'is_awaiting_payment' => false,
            ],
        ]);

        DB::table('payments')->insert([
            [
                'project_id' => 1,
                'amount' => 0,
                'scheduled_date' => '2023-01-20',
                'execution_date' => '2023-01-20',
                'deferred_date' => null,
            ],
            [
                'project_id' => 2,
                'amount' => 1400,
                'scheduled_date' => '2024-04-15',
                'execution_date' => '2024-04-15',
                'deferred_date' => null,
            ],
            [
                'project_id' => 2,
                'amount' => 1400,
                'scheduled_date' => '2024-05-10',
                'execution_date' => '2024-05-10',
                'deferred_date' => null,
            ],
            [
                'project_id' => 3,
                'amount' => 800,
                'scheduled_date' => '2024-05-10',
                'execution_date' => '2024-05-10',
                'deferred_date' => null,
            ],
            [
                'project_id' => 3,
                'amount' => 800,
                'scheduled_date' => '2024-06-15',
                'execution_date' => null,
                'deferred_date' => null,
            ],
            [
                'project_id' => 4,
                'amount' => 1200,
                'scheduled_date' => '2024-05-25',
                'execution_date' => null,
                'deferred_date' => null,
            ],
            [
                'project_id' => 4,
                'amount' => 1200,
                'scheduled_date' => '2024-08-01',
                'execution_date' => null,
                'deferred_date' => null,
            ],
            [
                'project_id' => 5,
                'amount' => 900,
                'scheduled_date' => '2023-01-10',
                'execution_date' => '2023-01-10',
                'deferred_date' => null,
            ],
            [
                'project_id' => 5,
                'amount' => 900,
                'scheduled_date' => '2023-01-20',
                'execution_date' => '2023-01-20',
                'deferred_date' => null,
            ],
            [
                'project_id' => 5,
                'amount' => 900,
                'scheduled_date' => '2023-02-10',
                'execution_date' => '2023-02-10',
                'deferred_date' => null,
            ],
            [
                'project_id' => 6,
                'amount' => 1300,
                'scheduled_date' => '2023-04-12',
                'execution_date' => '2023-04-12',
                'deferred_date' => null,
            ],
            [
                'project_id' => 7,
                'amount' => 1500,
                'scheduled_date' => '2023-04-05',
                'execution_date' => '2023-04-05',
                'deferred_date' => null,
            ],
            [
                'project_id' => 7,
                'amount' => 800,
                'scheduled_date' => '2023-04-20',
                'execution_date' => '2023-04-20',
                'deferred_date' => null,
            ],
            [
                'project_id' => 7,
                'amount' => 800,
                'scheduled_date' => '2023-05-10',
                'execution_date' => null,
                'deferred_date' => '2023-05-15',
            ],
            [
                'project_id' => 8,
                'amount' => 1000,
                'scheduled_date' => '2023-06-05',
                'execution_date' => '2023-06-05',
                'deferred_date' => null,
            ],
            [
                'project_id' => 8,
                'amount' => 800,
                'scheduled_date' => '2023-06-15',
                'execution_date' => '2023-06-15',
                'deferred_date' => null,
            ],
            [
                'project_id' => 8,
                'amount' => 800,
                'scheduled_date' => '2023-06-25',
                'execution_date' => null,
                'deferred_date' => '2023-06-30',
            ],
            [
                'project_id' => 9,
                'amount' => 1200,
                'scheduled_date' => '2023-08-20',
                'execution_date' => '2023-08-20',
                'deferred_date' => null,
            ],
            [
                'project_id' => 10,
                'amount' => 1000,
                'scheduled_date' => '2023-10-12',
                'execution_date' => '2023-10-12',
                'deferred_date' => null,
            ],
            [
                'project_id' => 10,
                'amount' => 900,
                'scheduled_date' => '2023-10-25',
                'execution_date' => '2023-10-25',
                'deferred_date' => null,
            ],
            [
                'project_id' => 10,
                'amount' => 900,
                'scheduled_date' => '2023-11-15',
                'execution_date' => '2023-11-15',
                'deferred_date' => null,
            ],
            [
                'project_id' => 11,
                'amount' => 1100,
                'scheduled_date' => '2024-02-05',
                'execution_date' => '2024-02-05',
                'deferred_date' => null,
            ],
            [
                'project_id' => 11,
                'amount' => 1100,
                'scheduled_date' => '2024-02-25',
                'execution_date' => '2024-02-25',
                'deferred_date' => null,
            ],
            [
                'project_id' => 12,
                'amount' => 900,
                'scheduled_date' => '2024-03-01',
                'execution_date' => '2024-03-01',
                'deferred_date' => null,
            ],
            [
                'project_id' => 12,
                'amount' => 900,
                'scheduled_date' => '2024-03-15',
                'execution_date' => '2024-03-15',
                'deferred_date' => null,
            ],
            [
                'project_id' => 13,
                'amount' => 1300,
                'scheduled_date' => '2024-04-20',
                'execution_date' => '2024-04-20',
                'deferred_date' => null,
            ],
            [
                'project_id' => 13,
                'amount' => 1200,
                'scheduled_date' => '2024-06-15',
                'execution_date' => '2024-06-20',
                'deferred_date' => null,
            ],
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
