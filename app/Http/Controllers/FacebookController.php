<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('/')->withErrors('Unable to login using Facebook. Please try again.');
        }

        // Find the user in the database or create a new user
        $finduser = User::where('facebook_id', $user->id)->first();

        if ($finduser) {
            Auth::login($finduser, true);
        } else {
            $newUser = User::updateOrCreate(
                ['email' => $user->email],
                [
                    'name' => $user->name,
                    'facebook_id' => $user->id,
                    'password' => Hash::make('password'),
                    'role_id' => 1,
                ]
            );

            Auth::login($newUser, true);
        }

        return view('Beranda.beranda-after-login', [
            'user' => Auth::user(),
        ]);
    }
}

