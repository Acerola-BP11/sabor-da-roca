<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['nome', 'email', 'assunto', 'coment'];
}