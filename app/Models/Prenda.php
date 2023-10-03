<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;

    protected $fillable = ['imagen','nombre', 'descripcion', 'cantidad', 'tallaje', 'precio'];

    
}
