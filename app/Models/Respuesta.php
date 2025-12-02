<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Respuesta extends Model
{
    protected $table = 'respuesta';
    protected $primaryKey = 'respuesta_id';
    public $timestamps = false;
    
    protected $fillable = [
        'encuesta_id',
        'encuestado_id',
        'respuestas',
        'medio'
    ];

    protected $casts = [
        'respuestas' => 'array',
        'fecha_respuesta' => 'datetime'
    ];

    // Relaciones
    public function encuesta(): BelongsTo
    {
        return $this->belongsTo(Encuesta::class, 'encuesta_id', 'encuesta_id');
    }

    public function encuestado(): BelongsTo
    {
        return $this->belongsTo(Encuestado::class, 'encuestado_id', 'encuestado_id');
    }
}