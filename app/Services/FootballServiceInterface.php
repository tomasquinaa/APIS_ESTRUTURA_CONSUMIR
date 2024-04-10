<?php

// Refatoração para Interface
// Vamos começar criando uma interface para o serviço de futebol (FootballService). Isso ajudará a desacoplar o controlador de qualquer implementação específica do serviço

// app/Services/FootballServiceInterface.php

namespace App\Services;

interface FootballServiceInterface
{
    public function getTimezone();
    public function getCountries();
}

// Agora, Essa interface vai ser implementada na classe FootballService.