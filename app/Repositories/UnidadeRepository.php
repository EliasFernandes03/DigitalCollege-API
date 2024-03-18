<?php

namespace App\Repositories;

use App\Models\Unidade;

class UnidadeRepository 
{
    //chama o metodo all do Eloquent para retornar todas as unidades
    public function all() {
        return Unidade::all();
    }
}