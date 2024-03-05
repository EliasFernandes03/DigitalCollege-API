<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CursoService;

class CursoController extends Controller
{
    protected $cursoService;

    public function __construct(CursoService $cursoService)
    {
        $this->cursoService = $cursoService;
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'curso_id' => 'required|string',
            'nome' => 'required|string',
        ]);

        $curso = $this->cursoService->createCurso($request->all());

        return response()->json($curso, 201);
    }

    public function show(Request $request) 
    {
            $curso = $this->cursoService->showCurso();
            return response()->json($curso,200);
    }

    public function showById(Request $request,$id) 
    {
            $curso = $this->cursoService->findById($id);
            return response()->json($curso,200);
    }
}
