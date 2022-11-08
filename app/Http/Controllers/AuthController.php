<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $remember = $request->has('remember_me');

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (auth()->attempt($credentials, $remember)) {
            if (auth()->user()->hasRole('User')) {
                $request->session()->regenerate();

                return redirect()->intended('/')->with('message', 'Welcome back, ' . auth()->user()->name . '!');
            }

            if (auth()->user()->hasRole(['Admin', 'Super Admin'])) {
                $request->session()->regenerate();

                return redirect()->intended('dashboard')->with('message', 'Welcome back, ' . auth()->user()->name . '!');
            }
        }

        return back()->with('error', 'Email atau Password salah. Silakan coba lagi!');
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function store(AccountRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->file('foto')) $data['foto'] = $request->file('foto')->store('user-image');

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        $user->assignRole('User');

        return redirect()->route('login')->with('message', 'Registrasi Berhasil!');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
}
