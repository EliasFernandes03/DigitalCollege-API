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

    public function showCurso()
    {
        return $this->cursoRepository->all();
    }
    public function findById($id)
    {
        return $this->cursoRepository->findById($id);
    }
}
