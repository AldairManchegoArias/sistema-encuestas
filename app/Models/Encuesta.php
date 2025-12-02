<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Encuesta extends Model
{
    protected $table = 'encuesta';
    protected $primaryKey = 'encuesta_id';
    public $timestamps = false;
    
    protected $fillable = [
        'empresa_id',
        'titulo',
        'descripcion',
        'config',
        'fecha_inicio',
        'fecha_fin',
        'estado'
    ];

    protected $casts = [
        'config' => 'array',
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime'
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