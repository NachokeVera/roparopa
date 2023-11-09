<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VestimentaTalla extends Model
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
}
