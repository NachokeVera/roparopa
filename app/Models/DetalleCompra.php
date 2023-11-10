<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetalleCompra extends Model
{
    use HasFactory;

    //Uno a muchos
    
    //Conexiones FK
    public function vestimenta(): BelongsTo
    {
        return $this->belongsTo(Vestimenta::class);
    }
    public function talla(): BelongsTo
    {
        return $this->belongsTo(Talla::class);
    }
    public function boleta(): BelongsTo
    {
        return $this->belongsTo(Boleta::class);
    }
    
}
