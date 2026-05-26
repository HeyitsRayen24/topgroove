<?php

namespace App\Services;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function addUser(array $data)
    {
        $memberRole = Role::where('name', 'Member')->first();

        return User::create([
            'name'              => $data['name'],
            'age'               => $data['age'],
            'date_of_birth'     => $data['date_of_birth'],
            'place_of_birth'    => $data['place_of_birth'],
            'phone'             => $data['phone'],
            'gender'            => $data['gender'],
            'address'           => $data['address'],
            'email'             => $data['email'],
            'password'          => Hash::make($data['password']),
            'role_id'           => $memberRole->id
        ]);

        
    }
}
