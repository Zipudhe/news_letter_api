<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;
    protected $table = 'Vaga';
    protected $casts = ["Requisitos" => "array"];
    protected $fillable = ["Empresa", "Descricao", "Requisitos"];
    public $timestamps = false;
}
