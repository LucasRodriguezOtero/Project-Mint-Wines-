<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Producto extends Model
{
    use HasFactory;
    //categorias que pueden ser seteadas
    protected $fillable = [
        'nombre',
        'descripcion',
        'nota_cata',
        'crianza_barricado',
        'precio',
        'categoria_id',
        'bodega_id',
        'is_visible',
        'imagen',
        
    ];
    public function precio_format()
    {
        return '$'.number_format($this->precio, 2, ',','.');
    }
    public function Categoria()
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }
}
