<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'table_enderecos';
    protected $fillable =[
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
    ];
    use HasFactory;
}
