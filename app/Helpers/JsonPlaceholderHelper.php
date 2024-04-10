<?php

namespace App\Helpers;

class JsonPlaceholderHelper
{
    const BASE_URL = 'https://jsonplaceholder.typicode.com';

    // Rapid API
    public static function getApiEndpoint()
    {
        // return 'https://api-football-v1.p.rapidapi.com/v3/timezone';
        return 'https://api-football-v1.p.rapidapi.com/v3';
    }

    public static function getApiHeaders()
    {
        return [
            'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com',
            'X-RapidAPI-Key' => '9d33715652msha31f124cb292d70p120a20jsn13f11eaa9b04',
        ];
    }
}
