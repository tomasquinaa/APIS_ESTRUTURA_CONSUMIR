<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Helpers\JsonPlaceholderHelper;

class FootballService
{
    public function getTimezone()
    {
        $client = new Client();

        try {
            $response = $client->request('GET', JsonPlaceholderHelper::getApiEndpoint(), [
                'headers' => JsonPlaceholderHelper::getApiHeaders(),
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
