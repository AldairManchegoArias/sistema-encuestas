<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RespuestaDetalle extends Model
{
    protected $table = 'respuestas_detalle';
    protected $primaryKey = 'respuesta_detalle_id';
    
    protected $fillable = [
        'respuesta_id',
        'pregunta_id',
        'opcion_id',
        'respuesta_texto',
    ];

    // Relaciones
    public function respuesta(): BelongsTo
    {
        return $this->belongsTo(Respuesta::class, 'respuesta_id', 'respuesta_id');
    }

    public function pregunta(): BelongsTo
    {
        return $this->belongsTo(Pregunta::class, 'pregunta_id', 'pregunta_id');
    }

    public function opcion(): BelongsTo
    {
        return $this->belongsTo(OpcionRespuesta::class, 'opcion_id', 'opcion_id');
    }
}
