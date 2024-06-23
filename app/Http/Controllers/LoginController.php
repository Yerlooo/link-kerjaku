<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function getShowLogin()
    {
        return view('user.login', [
            'title' => 'login'
        ]);
    }
    public function getAuthenticateLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            if (auth()->user()->role_id === 1) {
                return redirect()->intended('/link-kerjaku')->with('success', 'Login Successful!');
            } else {
                return redirect()->intended('/PageDashboard');
            }
            
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:perusahaan')->except('logout');

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function getShowLoginPerusahaan()
    {
        return view('Perusahaan.loginperusahaan');
    }
    public function postLoginPerusahaan(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            if (auth()->user()->role_id === 2) {
                return redirect()->intended('/PageDashboard')->with('success', 'Login Successful!');
            } else {
                return redirect()->intended('/loginperusahaan');
            }
            
        }
        Alert::errorperusahaan('Sukses', 'Email atau Passwird salah, Silahkan Cek Kembali!')->persistent(true);
        return back()->withInput($request->only('email', 'remember'));

    }
    
}
