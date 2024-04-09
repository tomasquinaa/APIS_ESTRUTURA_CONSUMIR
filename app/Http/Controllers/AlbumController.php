<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\JsonPlaceholderService;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    protected $services;

    public function __construct(JsonPlaceholderService $service)
    {
        $this->services = $service;
    }

    public function handle()
    {
        $albuns = $this->services->getAlbum();
        return response()->json($albuns);
    }
}
