<?php

namespace App\Services;

use App\Repositories\CursoRepository;

class CursoService
{
    protected $cursoRepository;

    public function __construct(CursoRepository $cursoRepository)
    {
        $this->cursoRepository = $cursoRepository;
    }

    public function createCurso($data)
    {
        return $this->cursoRepository->create($data);
    }
}
