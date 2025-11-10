<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PersonaExterna extends Model
{
    protected $table = 'personas_externas';
    protected $primaryKey = 'persona_externa_id';
    
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
    ];

    // Relaciones
    public function respuestas(): HasMany
    {
        return $this->hasMany(Respuesta::class, 'persona_externa_id', 'persona_externa_id');
    }
}
