<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ejemplar extends Model
{
    protected $fillable = [
        'codigo',
        'libro_id',
    ];


    public function libro(): BelongsTo{
        return $this->belongsTo(Libro::class);
    }

    public function prestamos(): HasMany{
        return $this->hasMany(Prestamo::class);
    }
}
