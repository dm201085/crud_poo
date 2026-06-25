<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    use HasFactory;

    // Define explicitamente o nome da tabela
    protected $table = 'forma_pagamentos';

    // Permite a inserção em massa desses campos
    protected $fillable = [
        'tipo',
        'descricao',
    ];
}