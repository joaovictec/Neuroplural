<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dica extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'icone'
    ];
}
