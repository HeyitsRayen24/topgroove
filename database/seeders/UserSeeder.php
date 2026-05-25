<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'phone' => '085794477065',
            'gender' => 'Laki-laki',
            'address' => 'Rss Baumata'
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Keyzia',
            'email' => 'keyzia@gmail.com',
            'password' => bcrypt('123'),
            'phone' => '085794477065',
            'gender' => 'Laki-laki',
            'address' => 'Rss Baumata'
        ]);
    }
}
