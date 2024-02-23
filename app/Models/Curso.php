<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'tb_curso';
    protected $primaryKey = 'curso_id';
    protected $fillable = ['curso_id', 'nome'];
    public $timestamps = false;
}