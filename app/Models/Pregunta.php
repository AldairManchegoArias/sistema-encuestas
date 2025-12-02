<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pregunta extends Model
{
    protected $table = 'pregunta';
    protected $primaryKey = 'pregunta_id';
    public $timestamps = false;
    
    protected $fillable = [
        'encuesta_id',
        'tipo',
        'texto',
        'metadata',
        'orden'
    ];

    protected $casts = [
        'metadata' => 'array',
        'orden' => 'integer'
    ];

    // Relaciones
    public function encuesta(): BelongsTo
    {
        return $this->belongsTo(Encuesta::class, 'encuesta_id', 'encuesta_id');
    }
}