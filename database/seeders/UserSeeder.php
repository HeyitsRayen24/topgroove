<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('123'),
            'phone' => '085794477065',
            'gender' => 'Laki-laki',
            'address' => 'Rss Baumata',
            'place_of_birth' => 'Kupang',
            'date_of_birth' => '1998-06-13',
            'age' => '30'
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Keyzia',
            'email' => 'keyzia@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '085794477065',
            'gender' => 'Laki-laki',
            'address' => 'Rss Baumata',
            'place_of_birth' => 'Jakarta',
            'date_of_birth' => '2000-04-20',
            'age' => '26'
        ]);
    }
}
