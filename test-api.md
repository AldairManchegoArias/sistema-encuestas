# 🧪 Guía de Pruebas API - Sistema de Encuestas

## 🌐 Base URL
```
http://127.0.0.1:8000/api
```

## 📋 **1. Endpoints Públicos (Sin Autenticación)**

### 🔍 Obtener una Encuesta Pública
```bash
curl -X GET "http://127.0.0.1:8000/api/public/encuesta/1" \
  -H "Accept: application/json"
```

### 📝 Enviar Respuesta a Encuesta Pública
```bash
curl -X POST "http://127.0.0.1:8000/api/public/encuesta/1/respuesta" \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "persona_externa": {
      "nombre": "Juan Pérez Test",
      "email": "juan.test@example.com",
      "telefono": "+502 5555-9999"
    },
    "respuestas": [
      {
        "pregunta_id": 1,
        "opcion_id": 2
      },
      {
        "pregunta_id": 2,
        "opcion_id": 7
      },
      {
        "pregunta_id": 3,
        "respuesta_texto": "Muy buen servicio, seguiré usándolo."
      }
    ],
    "medio": "web"
  }'
```

## 🔐 **2. Autenticación**

### 🔑 Login (Obtener Token)
```bash
curl -X POST "http://127.0.0.1:8000/api/auth/login" \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "email": "maria.gonzalez@technosoft.com.gt",
    "password": "password123"
  }'
```

**Respuesta esperada:**
```json
{
  "success": true,
  "data": {
    "persona": { ... },
    "token": "1|abcd1234...",
    "token_type": "Bearer"
  },
  "message": "Login exitoso"
}
```

### 👤 Obtener Información del Usuario Autenticado
```bash
curl -X GET "http://127.0.0.1:8000/api/auth/me" \
  -H "Authorization: Bearer TU_TOKEN_AQUI" \
  -H "Accept: application/json"
```

## 🏢 **3. Endpoints Protegidos**

> **Nota:** Reemplaza `TU_TOKEN_AQUI` con el token obtenido del login

### 📋 Listar Empresas
```bash
curl -X GET "http://127.0.0.1:8000/api/empresas" \
  -H "Authorization: Bearer TU_TOKEN_AQUI" \
  -H "Accept: application/json"
```

### 📊 Listar Encuestas
```bash
curl -X GET "http://127.0.0.1:8000/api/encuestas" \
  -H "Authorization: Bearer TU_TOKEN_AQUI" \
  -H "Accept: application/json"
```

### 📊 Crear Nueva Encuesta
```bash
curl -X POST "http://127.0.0.1:8000/api/encuestas" \
  -H "Authorization: Bearer TU_TOKEN_AQUI" \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "empresa_id": 1,
    "titulo": "Encuesta de Prueba API",
    "descripcion": "Esta es una encuesta creada desde la API para probar funcionamiento",
    "fecha_inicio": "2025-11-06",
    "fecha_fin": "2025-12-06",
    "estado": "borrador"
  }'
```

### ❓ Crear Pregunta para Encuesta
```bash
curl -X POST "http://127.0.0.1:8000/api/preguntas" \
  -H "Authorization: Bearer TU_TOKEN_AQUI" \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "encuesta_id": 8,
    "tipo": "opcion_multiple",
    "texto_pregunta": "¿Cómo calificarías esta API?",
    "obligatoria": true,
    "orden": 1,
    "opciones": [
      {"texto_opcion": "Excelente", "valor": 5},
      {"texto_opcion": "Muy buena", "valor": 4},
      {"texto_opcion": "Buena", "valor": 3},
      {"texto_opcion": "Regular", "valor": 2},
      {"texto_opcion": "Mala", "valor": 1}
    ]
  }'
```

### 📈 Obtener Estadísticas de Encuesta
```bash
curl -X GET "http://127.0.0.1:8000/api/encuestas/1/estadisticas" \
  -H "Authorization: Bearer TU_TOKEN_AQUI" \
  -H "Accept: application/json"
```

### 📊 Análisis de Respuestas
```bash
curl -X GET "http://127.0.0.1:8000/api/respuestas/encuesta/1/analizar" \
  -H "Authorization: Bearer TU_TOKEN_AQUI" \
  -H "Accept: application/json"
```

## 🔧 **Herramientas Recomendadas:**

### 1. **Postman** (Interfaz Gráfica)
1. Descarga Postman
2. Importa esta colección de endpoints
3. Configura variable de entorno para el token

### 2. **Thunder Client** (VS Code Extension)
1. Instala la extensión en VS Code
2. Crea requests con interfaz gráfica

### 3. **Insomnia** (Alternativa a Postman)
1. Interfaz más limpia
2. Ideal para APIs REST

## 🐛 **Solución de Problemas Comunes:**

### Error 419 (CSRF Token)
- Agrega header: `"X-Requested-With": "XMLHttpRequest"`

### Error 401 (Unauthorized)
- Verifica que el token sea correcto
- Verifica que uses "Bearer " antes del token

### Error 422 (Validation Error)
- Revisa que todos los campos requeridos estén presentes
- Verifica tipos de datos (string, integer, etc.)

### Error 500 (Server Error)
- Revisa los logs: `php artisan tinker`
- Verifica conexión a base de datos

## 🎯 **Flujo de Prueba Recomendado:**

1. **Login** → Obtener token
2. **Listar empresas** → Verificar datos
3. **Crear encuesta** → Probar creación
4. **Agregar preguntas** → Completar encuesta
5. **Obtener encuesta pública** → Sin token
6. **Enviar respuesta** → Como usuario externo
7. **Ver análisis** → Con token de administrador
