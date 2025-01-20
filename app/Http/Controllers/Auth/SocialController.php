<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function OpenGoogleAccountDetails()
    {
        $user = Socialite::driver('google')->stateless()->user();

        dd($user);
    }
}
