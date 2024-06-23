<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function login()
    {
        return view('Beranda.beranda');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            if (auth()->user()->role_id === 1) {
                return redirect()->with('success', 'Login Successfull!')->intended('/link-kerjaku');
            } else {
                return redirect()->intended('/HomePagePerusahaan');
            }
            
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function getLogin()
    {
        return view('Beranda.beranda-after-login');
    }
}