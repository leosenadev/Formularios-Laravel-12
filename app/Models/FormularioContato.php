<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioContato extends Model
{
    protected $table='contatos';
    protected $fillable = ['nome','telefone','email','motivo_contato','mensagem'];
}
