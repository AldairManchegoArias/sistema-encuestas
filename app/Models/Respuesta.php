<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Respuesta extends Model
{
    protected $table = 'respuestas';
    protected $primaryKey = 'respuesta_id';
    
    protected $fillable = [
        'encuesta_id',
        'persona_externa_id',
        'fecha_respuesta',
        'medio',
    ];

    protected $casts = [
        'fecha_respuesta' => 'datetime',
    ];

    // Relaciones
    public function encuesta(): BelongsTo
    {
        return $this->belongsTo(Encuesta::class, 'encuesta_id', 'encuesta_id');
    }

    public function personaExterna(): BelongsTo
    {
        return $this->belongsTo(PersonaExterna::class, 'persona_externa_id', 'persona_externa_id');
    }

    public function detalles(): HasMany
    {
        return $this->hasMany(RespuestaDetalle::class, 'respuesta_id', 'respuesta_id');
    }
}
