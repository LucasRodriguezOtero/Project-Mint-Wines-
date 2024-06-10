<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    //categorias que pueden ser seteadas
    protected $fillable = [
        'nombre',
        'descripcion',
        
    ];
}
