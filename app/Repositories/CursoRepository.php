<?php

namespace App\Repositories;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Curso;

class CursoRepository
{
    public function create($data)
    {
        DB::connection()->getPdo();
        
        return Curso::create($data);
    }

    public function all() 
    {
        DB::connection()->getPdo();
        return Curso::all();
    }

    public function findById($id)
    {
        DB::connection()->getPdo();
        return Curso::findOrFail($id);
    }
}
