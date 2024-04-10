<?php

namespace App\Services;

use App\Helpers\JsonPlaceholderHelper;
use Illuminate\Support\Facades\Http;

class JsonPlaceholderService implements JsonPlaceholderServiceInterface
{
    public function getPosts()
    {
        $response = Http::get(JsonPlaceholderHelper::BASE_URL . '/posts');
        return $response->json();
    }

    public function getComments()
    {
        $response = Http::get(JsonPlaceholderHelper::BASE_URL . '/comments');
        return $response->json();
    }

    public function getAlbum()
    {
        $response = Http::get(JsonPlaceholderHelper::BASE_URL . '/albums');
        return $response->json();
    }
}
