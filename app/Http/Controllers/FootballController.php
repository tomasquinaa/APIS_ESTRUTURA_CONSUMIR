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
