<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vestimenta extends Model
{
    use HasFactory;

    protected $fillable = ['imagen','nombre', 'descripcion', 'cantidad', 'precio'];

}

