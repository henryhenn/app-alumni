<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->hasRole('User')) {
                $request->session()->regenerate();

                return redirect()->intended('/');
            }

            if (auth()->user()->hasRole('Admin')) {
                $request->session()->regenerate();

                return redirect()->intended('dashboard');
            }
        }

        return back()->with('error', 'Email atau Password salah. Silakan coba lagi!');
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request): \Illuminate\Http\RedirectResponse
    {
        $user = User::create($request->validated());

        $user->assignRole('User');

        return redirect()->route('dashboard.index');
    }
}
