<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adversario extends Model
{
    protected $fillable = [
        'nome',
        'estado'
    ];
}