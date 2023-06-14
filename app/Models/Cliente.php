<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'nome',
        'rua',
        'complemento',
        'cidade',
        'numero_fixo',
        'ddd_fixo',
        'numero_cel',
        'ddd_cel',
        'cpf',
        'nascimento',
        'rg'
    ];

    protected $casts = [
        'numero_fixo' => 'integer',
        'ddd_fixo' => 'integer',
        'numero_cel' => 'integer',
        'ddd_cel' => 'integer',
        'cpf' => 'integer',
        'rg' => 'integer',
    ];
}
