<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    protected $table = 'empresa';
    protected $primaryKey = 'empresa_id';
    public $timestamps = false;
    
    protected $fillable = [
        'nombre',
        'documento',
        'direccion',
        'telefono',
        'email',
        'estado',
    ];

    protected $casts = [
        'fecha_creacion' => 'datetime',
    ];

    // Relaciones
    public function personasAutorizadas(): HasMany
    {
        return $this->hasMany(PersonaAutorizada::class, 'empresa_id', 'empresa_id');
    }

    public function encuestas(): HasMany
    {
        return $this->hasMany(Encuesta::class, 'empresa_id', 'empresa_id');
    }
}
