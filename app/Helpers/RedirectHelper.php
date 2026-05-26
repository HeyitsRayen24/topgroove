<?php

namespace App\Helpers;

class RedirectHelper
{
    public static function redirectByRole($user)
    {
        return match($user->role->name)
        {
            'Admin' => redirect()->route('dashboard.admin'),
            'Member' => redirect()->route('dashboard.member'),

            default => redirect('/'),
        };
    }
}