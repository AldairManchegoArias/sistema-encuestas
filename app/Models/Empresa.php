<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $primaryKey = 'empresa_id';
    
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
        'estado',
        'fecha_creacion',
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
