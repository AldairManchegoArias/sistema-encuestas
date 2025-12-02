<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Encuestado extends Model
{
    protected $table = 'encuestado';
    protected $primaryKey = 'encuestado_id';
    public $timestamps = false;
    
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'tipo'
    ];

    // Relaciones
    public function respuestas(): HasMany
    {
        return $this->hasMany(Respuesta::class, 'encuestado_id', 'encuestado_id');
    }
}