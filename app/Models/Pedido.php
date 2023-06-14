<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['endereco', 'id_cliente'];

    protected $casts = ['total_pedido'];
}
