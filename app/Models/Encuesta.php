<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Encuesta extends Model
{
    protected $table = 'encuestas';
    protected $primaryKey = 'encuesta_id';
    
    protected $fillable = [
        'empresa_id',
        'titulo',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'url_larga',
        'url_corta',
        'qr_code',
        'estado',
    ];

    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
    ];

    // Relaciones
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class, 'empresa_id', 'empresa_id');
    }

    public function preguntas(): HasMany
    {
        return $this->hasMany(Pregunta::class, 'encuesta_id', 'encuesta_id')->orderBy('orden');
    }

    public function respuestas(): HasMany
    {
        return $this->hasMany(Respuesta::class, 'encuesta_id', 'encuesta_id');
    }
}
