<?php
namespace App\Http\Services;

use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser, $provider)
    {
        $user = User::where('provider_id', $providerUser->getId())
            ->whereProvider($provider)
            ->get();
        if ($user) {
            $result =array(
                'user' => $user,
                'access_token' => $providerUser->token
            );
            return $result;
        } else {
            $user = User::updateOrCreate(
                ['email' => $providerUser->getEmail()],
                ['provider_id' => $providerUser->getId(), 'provider' => $provider, 'name' => $providerUser->getName() ]
            );

            $result['user'] = $user;
            $result['access_token'] = $providerUser->token;

            return $result;
        }
    }
}