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
                'headers' => JsonPlaceholderHelper::getApiHeadersCountries(),
            ]);

            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}

// Aplicando Polimorfismo
// Agora, em vez de injetar diretamente FootballService no controlador, vamos injetar a interface FootballServiceInterface. 
// Isso permite que possamos alterar a implementação do serviço facilmente sem precisar mudar o código do controlador.