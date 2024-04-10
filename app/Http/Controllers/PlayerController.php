<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\FootballServiceInterface;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    protected $players;

    public function __construct(FootballServiceInterface $player)
    {
        $this->players = $player;
    }

    public function getPlayers()
    {
        try {
            $data = $this->players->getPlayers();
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
