<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    protected $fillable = [
        'setor',
        'preco',
        'quantidade'
    ];
}