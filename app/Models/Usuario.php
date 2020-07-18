<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable=['nome','sobreNome','telefone','login','email','cpf','data','senha','foto'];
}
