<?php

namespace App\Http\Controllers;

// use App\Models\RegisterUser;
use Illuminate\Support\Facades\Validator;
use App\Models\Perusahaan;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    //USER LOGIN
    public function getShowRegister() 
    {
        return view('user.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function getStoreRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:8|max:255|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role_id' => 1,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/email-verify')->with('success', 'Registrasi Berhasil!');
    }

    //PERUSAHAN LOGIN
    public function getShowRegisterPerusahaan()
    {
        return view('Perusahaan.registerperusahaan', [
            'title' => 'RegisterPerusahaan',
            'active' => 'registerperusahaan'
        ]);
    }
    public function getStoreRegisterPerusahaan(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:8|max:255|confirmed',
        ]);
        // dd($validatedData);
    
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role_id' => 2,
        ]);
    
        event(new Registered($user));

        return redirect('/PageLogin-Dashboard')->with('successperusahaan', 'Perusahaan Berhasil Terdaftar! Silahkan Login');
    }
}
