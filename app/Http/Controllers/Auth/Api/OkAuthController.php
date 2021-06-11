<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Services\OkApiService;
use App\Http\Services\SocialAccountService;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class OkAuthController extends Controller
{
    public function callback(SocialAccountService $service, OkApiService $okApiService){
        $user = $service->createOrGetUser(Socialite::driver('odnoklassniki')->stateless()->user(), 'odnoklassniki');
        $groups = $okApiService->getUserGroups($user['access_token']);

        $result['user'] = $user;
        $result['groups'] = $groups;

        dd($result);
    }
}
