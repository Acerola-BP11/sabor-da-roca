<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marmitex extends Model
{
    use HasFactory;

    protected $table = 'marmitex';

    protected $fillable = ['preco', 'tamanho', 'tara', 'detalhamento'];
}
