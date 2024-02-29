<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model 
{   
    //Showing the table
    protected $table = "tb_unidade";

    protected $fillable = ["nome","CNPJ"];

}