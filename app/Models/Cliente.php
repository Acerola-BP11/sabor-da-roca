<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'rua', 'complemento', 'cidade', 'numero_fixo', 'ddd_fixo', 'numero_cel', 'ddd_cel',
'cpf', 'nascimento', 'rg'];
}
