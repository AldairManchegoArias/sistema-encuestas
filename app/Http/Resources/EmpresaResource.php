<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmpresaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'empresa_id' => $this->empresa_id,
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'estado' => $this->estado,
            'fecha_creacion' => $this->fecha_creacion?->format('Y-m-d H:i:s'),
            'personas_autorizadas' => PersonaAutorizadaResource::collection($this->whenLoaded('personasAutorizadas')),
            'encuestas' => EncuestaResource::collection($this->whenLoaded('encuestas')),
            'total_personas_autorizadas' => $this->whenCounted('personasAutorizadas'),
            'total_encuestas' => $this->whenCounted('encuestas'),
            'created_at' => $this->created_at?->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at?->format('Y-m-d H:i:s'),
        ];
    }
}
