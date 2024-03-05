<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CursoController;

Route::post('/cursos', 'CursoController@create');
Route::get('/cursos', 'CursoController@show');

Route::get('/', function () {
    return app()->version();
});