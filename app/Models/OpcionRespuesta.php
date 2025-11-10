<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OpcionRespuesta extends Model
{
    protected $table = 'opciones_respuesta';
    protected $primaryKey = 'opcion_id';
    
    protected $fillable = [
        'pregunta_id',
        'texto_opcion',
        'valor',
    ];

    protected $casts = [
        'valor' => 'integer',
    ];

    // Relaciones
    public function pregunta(): BelongsTo
    {
        return $this->belongsTo(Pregunta::class, 'pregunta_id', 'pregunta_id');
    }

    public function respuestasDetalle(): HasMany
    {
        return $this->hasMany(RespuestaDetalle::class, 'opcion_id', 'opcion_id');
    }
}
