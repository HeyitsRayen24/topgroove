<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guarded = ['id', 'email_verified_at'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
