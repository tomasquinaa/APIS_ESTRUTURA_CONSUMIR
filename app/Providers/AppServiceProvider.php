<?php

namespace App\Providers;

use App\Services\AlbumService;
use App\Services\FootballService;
use App\Services\FootballServiceInterface;
use App\Services\JsonPlaceholderServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FootballServiceInterface::class, FootballService::class);
    }

    /**
     * ERRRO: esta apresentar esse erro Target [App\Services\FootballServiceInterface] is not instantiable while building [App\Http\Controllers\FootballController].
     * 
     * Esse erro ocorre porque o Laravel não consegue instanciar uma interface diretamente. Ele precisa de uma implementação 
     * concreta para criar uma instância e injetá-la no construtor do controlador.
     * 
     * Para resolver isso, precisamos vincular a interface FootballServiceInterface a sua implementação 
     * FootballService no contêiner de serviços do Laravel. Vamos fazer isso no arquivo AppServiceProvider.php.
     * 
     * Primeiro, abra o arquivo AppServiceProvider.php localizado em app/Providers/AppServiceProvider.php.
     * 
     * Dentro da função register(), adicione o código para vincular a interface à sua implementação:
     * 
     * ESSE CODIGO: $this->app->bind(FootballServiceInterface::class, FootballService::class);
     * 
     * 
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
