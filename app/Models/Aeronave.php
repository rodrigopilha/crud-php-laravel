<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeronave extends Model
{
    use HasFactory;

    protected $fillable = [
        'inscricao',
        'fabricante',
        'modelo',
        'tipo',
        'companhia'
    ];
}
