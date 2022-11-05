<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
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

            if (auth()->user()->hasRole(['Admin', 'Super Admin'])) {
                $request->session()->regenerate();

                return redirect()->intended('dashboard');
            }
        }

        return back(400)->with('error', 'Email atau Password salah. Silakan coba lagi!');
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function store(AccountRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();

        if ($request->file('foto')) $data['foto'] = $request->file('foto')->store('user-image');

        $user = User::create($data);

        $user->assignRole('User');

        return redirect()->route('login')->with('message', 'Registrasi Berhasil!');
    }
}
