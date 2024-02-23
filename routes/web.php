<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/check-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['message' => 'Conexão com o banco de dados estabelecida com sucesso']);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erro ao conectar ao banco de dados: ' . $e->getMessage()], 500);
    }
});
$router->get('/', function () use ($router) {
    return $router->app->version();
});
