<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DetalleVestimenta extends Model
{
    use HasFactory;

    public function vestimenta(): BelongsTo
    {
        return $this->belongsTo(Vestimenta::class);
    }
    public function talla(): BelongsTo
    {
        return $this->belongsTo(Talla::class);
    }
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function detalleCompras(): HasMany
    {
        return $this->hasMany(DetalleCompra::class);
    }


}