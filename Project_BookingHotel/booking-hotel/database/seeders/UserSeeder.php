<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
>>>>>>> DuyBimNew

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
<<<<<<< HEAD
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'ADMIN', 'email' => 'admin1@gmail.com','password' => '$2y$12$X/uEY9Q/MOw/1h3CXJVmUuJLu5PrIZUwTjDoOWQ7ozGxBEDpbeL0m','role' => 1 ],
=======
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ADMIN',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456789'), // Change to a secure password
            'role' => 1, // Assuming 0 is the role for a standard user
>>>>>>> DuyBimNew
        ]);
    }
}
