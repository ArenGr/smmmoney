<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Services\SocialAccountService;

class FacebookAuthController extends Controller
{

//    public function redirect(){
//        return Socialite::driver('facebook')->redirect();
//    }

    public function callback(SocialAccountService $service){
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user(), 'facebook');
//        auth()->login($user);
//        return redirect()->to('/home');
        return response()->json($user);
    }
}
