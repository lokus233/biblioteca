<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Libro extends Model
{
    protected $fillable = [
        'titulo',
        'autor',
    ];

    public function ejemplares(): HasMany{
        return $this->hasMany(Ejemplar::class);
    }
}
