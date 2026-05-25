<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function authenticate(Request $request)
    {
        // input validation or credentials check
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Format email anda salah!',
            'password.required' => 'Password wajib diisi!'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            if(Auth::user()->role_id == 1)
            {
                return redirect()->route('dashboard.admin');
            }else if(Auth::user()->role_id == 2) {
                return redirect()->route('dashboard.member');
            }
        } else {
            return back()->withErrors([
                'email' => 'Email atau Password anda salah!',
                'password' => 'Email atau Password anda salah!'
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
