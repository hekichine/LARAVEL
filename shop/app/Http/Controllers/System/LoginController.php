<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {

        return view('system.users.login',[
            'title' => 'System | Login'
        ]);
    }
    public function login(Request $request)
    {
        $remember = $request->input('remember') ? true : false;
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','min:6']
        ]);

        if (Auth::attempt([
            'email'=>$request->input('email'),
            'password' => $request-> input('password')
        ],$remember)){
            $request->session()->regenerate();

            return redirect()->intended('system');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
