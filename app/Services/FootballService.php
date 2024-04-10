<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Helpers\JsonPlaceholderHelper;

class FootballService implements FootballServiceInterface
{
    public function getTimezone()
    {
        $client = new Client();

        try {
            $response = $client->request('GET', JsonPlaceholderHelper::getApiEndpoint() . '/timezone', [
                'headers' => JsonPlaceholderHelper::getApiHeaders(),
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function getCountries()
    {
        $client = new Client();

        try {
            $response = $client->request('GET', JsonPlaceholderHelper::getApiEndpoint() . '/teams/countries', [
                'headers' => JsonPlaceholderHelper::getApiHeaders(),
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function getPlayers()
    {
        $client = new Client();
        try {
            $response = $client->request('GET', JsonPlaceholderHelper::getApiEndpoint() . '/players?team=33&season=2020', [
                'headers' => JsonPlaceholderHelper::getApiHeaders(),
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
