<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'marca_produto', 
        'modelo_produto', 
        'numero_serie_produto',
        'processador_produto', 
        'memoria_produto', 
        'disco_produto', 
        'preco_produto'
    ];
}
