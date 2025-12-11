<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestamo extends Model
{
    protected $fillable = [
        'ejemplar_id',
        'cliente_id',
        'fecha_hora',
    ];
        protected $casts = [
            'fecha_hora' => 'datetime',
    ];
    public function cliente(): BelongsTo{
        return $this->belongsTo(Cliente::class);
    }

    public function ejemplar(){
        return $this->belongsTo(Ejemplar::class);
    }
}
