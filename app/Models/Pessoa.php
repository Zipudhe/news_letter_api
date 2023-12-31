<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $table = 'Pessoas';
    protected $casts = ["stack" => "array"];
    protected $fillable = ["name", "sobrenome", "email", "stack"];

    public $timestamps = false;
}
