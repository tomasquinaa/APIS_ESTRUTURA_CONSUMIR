<?php

namespace App\Services;

interface FootballServiceInterface
{
    public function getTimezone();
    public function getCountries();
    public function getPlayers();
}
