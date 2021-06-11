<?php
namespace App\Http\Services;

use GuzzleHttp\Client;

class OkApiService {

    public function getUserGroups($access_token)
    {
        $client = new Client();
        $api_url = env('ODNOKLASSNIKI_API');
        $signature = md5($access_token.env('ODNOKLASSNIKI_SECRET'));
        $result = $client->request('GET', $api_url, ['query' => [
            'application_key' => 'CBAPLMDMEBABABABA',
            'format' => 'json',
            'method' => 'group.getUserGroupsV2',
            'sig' => md5('application_key=CBAPLMDMEBABABABAformat=jsonmethod=group.getUserGroupsV2'.$signature),
            'access_token' => $access_token,
        ]]);

        return json_decode($result->getBody()->getContents());
    }
}