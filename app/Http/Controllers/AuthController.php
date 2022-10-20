<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            if(auth()->user()->hasRole('User')) {
                $request->session()->regenerate();

                return redirect()->intended('/');
            }

            if(auth()->user()->hasRole('Admin')) {
                $request->session()->regenerate();

                return redirect()->intended('dashboard');
            }
        }

        return back()->with('error', 'Email atau Password salah. Silakan coba lagi!');
    }

    public function register()
    {
        return view('register');
    }

    public function store(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        $user->assignRole('User');

        return redirect()->route('dashboard.index');
    }
}
