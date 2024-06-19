<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'ADMIN', 'email' => 'admin1@gmail.com','password' => '$2y$12$X/uEY9Q/MOw/1h3CXJVmUuJLu5PrIZUwTjDoOWQ7ozGxBEDpbeL0m','role' => 1 ],
        ]);
    }
}
