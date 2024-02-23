<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CursoController;

Route::post('/cursos', 'CursoController@create');

Route::get('/', function () {
    return app()->version();
});