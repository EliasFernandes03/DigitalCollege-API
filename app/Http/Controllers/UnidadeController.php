<?php

namespace App\Http\Controllers;

use App\Repositories\UnidadeRepository;

class UnidadeController extends Controller 
{   
    protected $unidaderepository;

    public function __construct(UnidadeRepository $unidadeRepository )
    {
        $this->unidadeRepository = $unidadeRepository;
    }

    public function show(UnidadeRepository $unidadeRepository)
    {
        $unidade= $this->unidadeRepository->all();
        return response()->json($unidade);
    }
}