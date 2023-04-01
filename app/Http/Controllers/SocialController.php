<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    //___redirect
    public function redirect($provider) {
        return Socialite::driver($provider)->redirect();
        // dd($provider);
    }

    //___callback
    public function callback($provider) {
        $user = Socialite::driver($provider)->user();
        dd($user);
    }
}
