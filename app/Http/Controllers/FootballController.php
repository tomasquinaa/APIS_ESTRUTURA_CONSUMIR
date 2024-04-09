<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\FootballService;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FootballController extends Controller
{
    protected $footballService;

    public function __construct(FootballService $footballService)
    {
        $this->footballService = $footballService;
    }

    public function getTimezone()
    {
        try {
            $data = $this->footballService->getTimezone();
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
























// public function getTimezone()
//     {
//         $client = new Client();

//         try {
//             $response = $client->request('GET', 'https://api-football-v1.p.rapidapi.com/v3/timezone', [
//                 'headers' => [
//                     'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com',
//                     'X-RapidAPI-Key' => '9d33715652msha31f124cb292d70p120a20jsn13f11eaa9b04',
//                 ],
//             ]);

//             $data = json_decode($response->getBody(), true);

//             return response()->json($data);
//         } catch (\Exception $e) {
//             return response()->json(['error' => $e->getMessage()], 500);
//         }
//     }
