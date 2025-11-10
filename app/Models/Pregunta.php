<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pregunta extends Model
{
    protected $table = 'preguntas';
    protected $primaryKey = 'pregunta_id';
    
    protected $fillable = [
        'encuesta_id',
        'tipo',
        'texto_pregunta',
        'obligatoria',
        'orden',
    ];

    protected $casts = [
        'obligatoria' => 'boolean',
        'orden' => 'integer',
    ];

    // Relaciones
    public function encuesta(): BelongsTo
    {
        return $this->belongsTo(Encuesta::class, 'encuesta_id', 'encuesta_id');
    }

    public function opciones(): HasMany
    {
        return $this->hasMany(OpcionRespuesta::class, 'pregunta_id', 'pregunta_id');
    }

    public function respuestasDetalle(): HasMany
    {
        return $this->hasMany(RespuestaDetalle::class, 'pregunta_id', 'pregunta_id');
    }
}
