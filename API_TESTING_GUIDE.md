# Pruebas de APIs del Sistema de Encuestas

BASE_URL: http://127.0.0.1:8000/api

## 1. Autenticación

### Login
```bash
POST /api/auth/login
Content-Type: application/json

{
    "email": "maria.gonzalez@techcorp.com",
    "password": "password123"
}
```

**Curl:**
```bash
curl -X POST http://127.0.0.1:8000/api/auth/login \
  -H "Content-Type: application/json" \
  -d '{
    "email": "maria.gonzalez@techcorp.com",
    "password": "password123"
  }'
```

### Obtener perfil (requiere token)
```bash
GET /api/auth/me
Authorization: Bearer {token}
```

**Curl:**
```bash
curl -X GET http://127.0.0.1:8000/api/auth/me \
  -H "Authorization: Bearer {TU_TOKEN_AQUI}"
```

### Logout
```bash
POST /api/auth/logout
Authorization: Bearer {token}
```

## 2. Empresas

### Listar empresas
```bash
GET /api/empresas
Authorization: Bearer {token}
```

**Curl:**
```bash
curl -X GET http://127.0.0.1:8000/api/empresas \
  -H "Authorization: Bearer {TU_TOKEN_AQUI}"
```

### Crear empresa
```bash
POST /api/empresas
Authorization: Bearer {token}
Content-Type: application/json

{
    "nombre": "Nueva Empresa",
    "sector": "tecnologia",
    "tamaño": "grande",
    "pais": "colombia",
    "ciudad": "bogota",
    "telefono": "+57 1 234567890",
    "email": "contacto@nuevaempresa.com",
    "configuracion": {
        "permite_encuestas_anonimas": true,
        "limite_encuestas_mes": 50
    }
}
```

### Ver empresa específica
```bash
GET /api/empresas/1
Authorization: Bearer {token}
```

## 3. Encuestas

### Listar encuestas
```bash
GET /api/encuestas
Authorization: Bearer {token}
```

**Curl:**
```bash
curl -X GET http://127.0.0.1:8000/api/encuestas \
  -H "Authorization: Bearer {TU_TOKEN_AQUI}"
```

### Crear encuesta
```bash
POST /api/encuestas
Authorization: Bearer {token}
Content-Type: application/json

{
    "empresa_id": 1,
    "titulo": "Encuesta de Satisfacción Laboral",
    "descripcion": "Evaluación del clima laboral en la empresa",
    "config": {
        "permite_respuestas_anonimas": true,
        "tiempo_limite_minutos": 30,
        "requiere_todas_preguntas": true
    },
    "fecha_inicio": "2024-12-01 00:00:00",
    "fecha_fin": "2024-12-31 23:59:59",
    "estado": "borrador"
}
```

### Ver encuesta específica
```bash
GET /api/encuestas/1
Authorization: Bearer {token}
```

## 4. Preguntas

### Listar preguntas de una encuesta
```bash
GET /api/encuestas/1/preguntas
Authorization: Bearer {token}
```

### Crear pregunta
```bash
POST /api/preguntas
Authorization: Bearer {token}
Content-Type: application/json

{
    "encuesta_id": 1,
    "texto": "¿Qué tan satisfecho está con su trabajo actual?",
    "tipo": "opcion_multiple",
    "opciones": [
        "Muy satisfecho",
        "Satisfecho", 
        "Neutral",
        "Insatisfecho",
        "Muy insatisfecho"
    ],
    "orden": 1,
    "config": {
        "obligatoria": true,
        "permite_otros": false
    }
}
```

## 5. Encuestados

### Listar encuestados
```bash
GET /api/encuestados
Authorization: Bearer {token}
```

### Crear encuestado
```bash
POST /api/encuestados
Authorization: Bearer {token}
Content-Type: application/json

{
    "nombre": "Juan Pérez",
    "email": "juan.perez@email.com",
    "telefono": "+57 300 1234567",
    "empresa": "TechCorp",
    "cargo": "Desarrollador Senior",
    "config": {
        "acepta_notificaciones": true,
        "idioma_preferido": "es"
    }
}
```

## 6. Respuestas

### Listar respuestas de una encuesta
```bash
GET /api/encuestas/1/respuestas
Authorization: Bearer {token}
```

### Crear respuesta
```bash
POST /api/respuestas
Authorization: Bearer {token}
Content-Type: application/json

{
    "encuesta_id": 1,
    "encuestado_id": 1,
    "respuestas_json": {
        "1": "Muy satisfecho",
        "2": "Excelente",
        "3": ["Flexibilidad", "Buen ambiente"]
    },
    "estado": "completada"
}
```

## 7. Personas Autorizadas

### Listar personas autorizadas
```bash
GET /api/personas-autorizadas
Authorization: Bearer {token}
```

### Crear persona autorizada
```bash
POST /api/personas-autorizadas
Authorization: Bearer {token}
Content-Type: application/json

{
    "empresa_id": 1,
    "nombre": "Ana",
    "apellido": "López",
    "email": "ana.lopez@techcorp.com",
    "rol": "analista",
    "estado": "activo"
}
```

## Notas Importantes:

1. **Token de autenticación**: Después del login exitoso, usa el token devuelto en el campo `data.token`

2. **Contraseña temporal**: Para las pruebas, todas las personas autorizadas usan la contraseña: `password123`

3. **Datos de prueba disponibles**:
   - **Empresa**: TechCorp (ID: 1)
   - **Persona autorizada**: maria.gonzalez@techcorp.com
   - **Encuesta**: "Encuesta de Satisfacción del Cliente" (ID: 1)

4. **Códigos de respuesta HTTP**:
   - 200: Éxito
   - 201: Creado exitosamente
   - 400: Error de validación
   - 401: No autorizado
   - 403: Prohibido
   - 404: No encontrado

5. **Para usar en Postman**:
   - Importa la colección con estos endpoints
   - Configura la variable de entorno `{{baseUrl}}` = `http://127.0.0.1:8000/api`
   - Después del login, configura la variable `{{token}}` con el valor devuelto