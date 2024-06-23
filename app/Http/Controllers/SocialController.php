<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->user(); // Get user info from Google
    
        $user = User::where('email', $googleUser->email)->first(); // Find the user in the database
    
        if ($user) {
            Auth::login($user, true); // Log in the user if they exist
            return view('Beranda.beranda-after-login', [
                'user' => $user,
            ]);
        } else {
            // Create a new user
            $user = User::create([
                'name' => $googleUser->name, // Use the name from the Google user
                'email' => $googleUser->email,
                'password' => Hash::make(uniqid()), // Use a random password
            ]);
    
            // Log the user in
            Auth::login($user, true);
        }
    
        return view('Beranda.beranda-after-login', [
            'user' => $user,
        ]);
    }
}
