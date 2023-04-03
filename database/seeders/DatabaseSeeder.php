<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Application;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'user',
        ]);

        DB::table('roles')->insert([
            'name' => 'moderator',
        ]);

        DB::table('users')->insert([
            'name' => 'moderator',
            'email' => 'moderator@email.ru',
            'role_id' => 2,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        User::factory(10)->create();

        Application::factory(50)->create();


    }
}
