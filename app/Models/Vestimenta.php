<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Vestimenta extends Model
{
    use HasFactory;

    protected $fillable = ['imagen','nombre', 'descripcion', 'precio'];
    //uno a muchos
    public function vestimentasTalla(): HasMany
    {
        return $this->hasMany(VestimentaTalla::class);
    }
    public function detalleCompra(): HasMany
    {
        return $this->hasMany(DetalleCompra::class);
    }
    //Conexion FK
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

}

