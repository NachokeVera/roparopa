<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vestimenta extends Model
{
    use HasFactory;

    protected $fillable = ['imagen','nombre', 'descripcion', 'precio'];
    
    //
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

}

