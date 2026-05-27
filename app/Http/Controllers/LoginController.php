<?php

namespace App\Http\Controllers;

use App\Helpers\RedirectHelper;
use App\Http\Requests\User\RegisterRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return RedirectHelper::redirectByRole(Auth::user())
            ->with('error', 'Anda sudah login!');
        }
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
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password min 8 karakter!'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return RedirectHelper::redirectByRole(Auth::user())->with('success', 'Login Berhasil');
        } else {
            return back()->withErrors([
                'email' => 'Email atau Password anda salah!',
                'password' => 'Email atau Password anda salah!'
            ])->onlyInput('email');
        }
    }
    
    public function showRegis()
    {
        if(Auth::check())
        {
            return RedirectHelper::redirectByRole(Auth::user())
            ->with('error', 'Anda sudah login!');
        }
        return view('pages.regis');
    }

    public function registration(RegisterRequest $request, UserService $service)
    {
        $service->addUser($request->validated());

        // Swal::success([
        //     'title' => 'Saved!',
        //     'text' => 'Anda Berhasil Registrasi',
        //     'time' => 1500,
        // ]);

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
