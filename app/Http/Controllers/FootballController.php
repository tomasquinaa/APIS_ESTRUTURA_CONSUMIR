<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\FootballService;
use App\Services\FootballServiceInterface;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FootballController extends Controller
{
    protected $footballService;

    public function __construct(FootballServiceInterface $footballService)
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


// SOLID e Encapsulamento
// A classe JsonPlaceholderHelper já está encapsulada, pois as funções estão encapsuladas dentro da classe. Além disso, 
// ao usar a interface FootballServiceInterface, estamos seguindo o princípio da inversão de dependência, que é uma parte do princípio SOLID.

// Com essas mudanças, o código é mais flexível e desacoplado, seguindo os princípios SOLID e os conceitos de encapsulamento e polimorfismo.























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
