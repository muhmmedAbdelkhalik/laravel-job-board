<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function showLoginForm()
    {
        return view('auth.login', [
            'pageTitle' => 'Login'
        ]);
    }

    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        auth()->login($user);
        return redirect('/');
    }

    public function showRegisterForm()
    {

        return view('auth.register', [
            'pageTitle' => 'Register'
        ]);
    }


    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
