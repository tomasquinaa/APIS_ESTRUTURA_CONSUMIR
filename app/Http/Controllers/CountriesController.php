<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\FootballServiceInterface;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    protected $countrieService;

    public function __construct(FootballServiceInterface $countries)
    {
        $this->countrieService = $countries;
    }

    public function getCountries()
    {
        try {
            $data = $this->countrieService->getCountries();
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
