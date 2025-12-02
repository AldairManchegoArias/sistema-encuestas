<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Sanctum\HasApiTokens;

class PersonaAutorizada extends Model
{
    use HasApiTokens;
    
    protected $table = 'persona_autorizada';
    protected $primaryKey = 'persona_id';
    public $timestamps = false;
    
    protected $fillable = [
        'empresa_id',
        'nombre',
        'apellido',
        'email',
        'rol',
        'estado',
    ];

    protected $casts = [
        'fecha_registro' => 'datetime',
    ];

    // Relaciones
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class, 'empresa_id', 'empresa_id');
    }

    // Métodos para verificar roles
    public function esAdministrador(): bool
    {
        return $this->rol === 'administrador';
    }

    public function esCreador(): bool
    {
        return $this->rol === 'creador';
    }

    public function esAnalista(): bool
    {
        return $this->rol === 'analista';
    }

    public function puedeCrearEncuestas(): bool
    {
        return in_array($this->rol, ['administrador', 'creador']);
    }

    public function puedeVerReportes(): bool
    {
        return in_array($this->rol, ['administrador', 'analista']);
    }
}
