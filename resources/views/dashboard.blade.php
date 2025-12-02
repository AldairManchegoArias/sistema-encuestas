<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Your Voice') }} - Dashboard</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css'])
    
    <style>
        .modal {
            transition: opacity 0.25s ease;
            display: none;
            align-items: center;
            justify-content: center;
        }
        .modal.show {
            display: flex;
        }
        .modal-content {
            transition: all 0.3s ease;
            transform: scale(0.9);
        }
        .modal.show .modal-content {
            transform: scale(1);
        }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-black min-h-screen p-4">
            <div class="mb-8">
                <h1 class="text-xl font-bold text-white">Your voice</h1>
                <p class="text-gray-400 text-sm">Microsoft Forms</p>
            </div>
            
            <nav class="space-y-2">
                 <a href="{{ route('home') }}" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                   Home
                </a>
                
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-white bg-blue-600 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v3H8V5z"></path>
                    </svg>
                    Gestión de encuestas
                </a>
               <a href="{{ route('reports') }}" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Reportería
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    Registro
                </a>
                
            </nav>
            
        </div>
        

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Header de Usuario -->
            <div class="flex justify-end mb-4">
                <div class="bg-gray-800 border border-gray-700 rounded-lg px-6 py-3">
                    <div class="flex items-center space-x-6">
                        <!-- Información del Usuario -->
                        <div class="flex items-center space-x-2 text-sm">
                            <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="text-gray-300">Nombre:</span>
                            <span class="text-white font-medium">Aldair Manchego</span>
                        </div>
                        
                        <!-- Rol -->
                        <div class="flex items-center space-x-2 text-sm">
                            <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-300">Rol:</span>
                            <span class="text-white font-medium">Administrador</span>
                        </div>
                        
                        <!-- Empresa -->
                        <div class="flex items-center space-x-2 text-sm">
                            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <span class="text-gray-300">Empresa:</span>
                            <span class="text-white font-medium">Tecnología SAS</span>
                        </div>
                        
                        <!-- Fecha y Hora Actual -->
                        <div class="flex items-center space-x-2 text-sm text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span id="current-datetime"></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-semibold text-white">Manage your surveys and analyze responses</h2>
                </div>
                <a href="https://forms.microsoft.com/" target="_blank" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    New Survey Microsoft Forms
                </a>
            </div>

            <!-- Search -->
            <div class="mb-6">
                <div class="relative">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" placeholder="Search surveys" class="w-full pl-10 pr-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <!-- Survey Cards -->
            <div class="space-y-4">
                <!-- Survey 1 -->
                    <div class="bg-gray-800 rounded-lg p-6 border border-gray-700" style="background-color: #101425;">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-white mb-2">Encuesta de Satisfacción del cliente</h3>

                            <div class="flex items-center space-x-4 text-sm text-gray-400">
                                <span>5 preguntas</span>
                                <span>📊 127 respuestas</span>
                                <span>📅 01/11/2025 - 30/11/2025</span>
                            </div>

                            <div class="flex items-center mt-2">
                                <span class="text-sm text-gray-400">Creada: 24/10/2025</span>
                                <span class="ml-4 text-blue-400">Via respuesta vía Forms</span>
                            </div>
                        </div>
                          
                        <!-- Botones -->
                        <div class="flex items-center space-x-2">
                            <span class="bg-green-600 text-white text-xs px-2 py-1 rounded">Active</span>
                            <!-- Botón Editar -->
                            <button data-modal="modal-editar" class="text-gray-400 hover:text-white bg-gray-800 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="green" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                    </path>
                                </svg>
                            </button>

                            <!-- Botón Compartir -->
                            <button data-modal="modal-compartir" class="text-gray-400 hover:text-white bg-gray-800 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="orange" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z">
                                    </path>
                                </svg>
                            </button>

                            <!-- Botón Eliminar -->
                            <button data-modal="modal-eliminar" class="text-gray-400 hover:text-white bg-gray-800 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="red" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex space-x-4 text-sm">
                        <a href="#" class="no-underline text-blue-400 hover:text-blue-300">Ver respuestas vía Forms</a>
                        <a href="#" class="no-underline text-blue-400 hover:text-blue-300">Obtener enlace para enviar</a>
                        <a href="#" class="no-underline text-blue-400 hover:text-blue-300">Exportar a Excel</a>
                        <a href="{{ route('survey.recipients', 1) }}" class="no-underline text-blue-400 hover:text-blue-300">Destinatarios</a>
                    </div>
                </div>


                <!-- Survey 2 -->
               <div class="bg-gray-800 rounded-lg p-6 border border-gray-700" style="background-color: #101425;">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-white mb-2">Asistencia a capacitaciones</h3>
                            <div class="flex items-center space-x-4 text-sm text-gray-400">
                                <span>7 preguntas</span>
                                <span>📊 128 respuestas</span>
                                <span>📅 03/11/2025 - 20/11/2025</span>
                            </div>
                            <div class="flex items-center mt-2">
                                <span class="text-sm text-gray-400">Creada: 24/10/2025</span>
                                <span class="ml-4 text-blue-400">Via respuesta vía Forms</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-green-600 text-white text-xs px-2 py-1 rounded">Active</span>
                            <button class="text-gray-400 hover:text-white bg-gray-800 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="green" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </button>
                            <button class="text-gray-400 hover:text-white bg-gray-800 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="orange" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                </svg>
                            </button>
                            <button class="text-gray-400 hover:text-white bg-gray-800 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="red" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4 text-sm">
                        <a href="#" class="no-underline text-blue-400 hover:text-blue-300">Ver respuestas via Forms</a>
                        <a href="#" class="no-underline text-blue-400 hover:text-blue-300">Obtener enlace para enviar</a>
                        <a href="#" class="no-underline text-blue-400 hover:text-blue-300">Exportar a Excel</a>
                        <a href="{{ route('survey.recipients', 1) }}" class="no-underline text-blue-400 hover:text-blue-300">Destinatarios</a>
                    </div>
                </div>

                <!-- Survey 3 -->
               <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 bg-custom-dark">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-white mb-2">Satisfacción de empleados respecto a capacitaciones</h3>
                            <div class="flex items-center space-x-4 text-sm text-gray-400">
                                <span>5 preguntas</span>
                                <span>📊 127 respuestas</span>
                                <span>📅 01/10/2025 - 30/10/2025</span>
                            </div>
                            <div class="flex items-center mt-2">
                                <span class="text-sm text-gray-400">Creada: 24/10/2025</span>
                                <span class="ml-4 text-blue-400">Via respuesta vía Forms</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="bg-gray-600 text-white text-xs px-2 py-1 rounded">Inactiva</span>
                            <button class="text-gray-400 hover:text-white bg-gray-800 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="green" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                </svg>
                            </button>
                            <button class="text-gray-400 hover:text-white bg-gray-800 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="orange" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                </svg>
                            </button>
                            <button class="text-gray-400 hover:text-white bg-gray-800 p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="red" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4 text-sm">
                        <a href="#" class="no-underline text-blue-400 hover:text-blue-300">Ver respuestas via Forms</a>
                        <a href="#" class="no-underline text-blue-400 hover:text-blue-300">Obtener enlace para enviar</a>
                        <a href="#" class="no-underline text-blue-400 hover:text-blue-300">Exportar a Excel</a>
                        <a href="{{ route('survey.recipients', 1) }}" class="no-underline text-blue-400 hover:text-blue-300">Destinatarios</a>
                    </div>

                </div>
            </div>

            <!-- Microsoft Forms Integration Notice -->
            <div class="mt-6 bg-blue-900/30 border border-blue-700 rounded-lg p-4">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h4 class="text-white font-medium">Integración con Microsoft Forms</h4>
                        <p class="text-blue-300 text-sm">Este módulo está conectado a tu cuenta de Office 365. Las encuestas se crean y gestionan en Microsoft Forms. Puedes obtener enlaces largos, cortos y códigos QR para compartir fácilmente.</p>
                    </div>
                </div>
            </div>

            <!-- Logout Button -->
            <div class="mt-8">
                <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Cerrar Sesión
                </a>
            </div>
        </div>
    </div>
</body>
<!-- Modal Editar -->
<div id="modal-editar" class="modal fixed inset-0 bg-black bg-opacity-60 z-50">
    <div class="modal-content bg-gray-800 w-full max-w-lg rounded-xl p-6 border border-gray-700 shadow-xl">
        <h2 class="text-xl font-semibold mb-4">Editar encuesta</h2>

        <label class="block text-sm mb-2">Nombre de la encuesta</label>
        <input type="text" class="w-full p-2 bg-gray-900 border border-gray-700 rounded-lg text-white">

        <label class="block text-sm mt-4 mb-2">Fecha de inicio</label>
        <input type="date" class="w-full p-2 bg-gray-900 border border-gray-700 rounded-lg text-white">

        <label class="block text-sm mt-4 mb-2">Fecha de fin</label>
        <input type="date" class="w-full p-2 bg-gray-900 border border-gray-700 rounded-lg text-white">

        <div class="flex justify-end mt-6 space-x-3">
            <button type="button" data-close class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg">Cancelar</button>
            <button type="button" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg">Guardar cambios</button>
        </div>
    </div>
</div>

<!-- Modal Eliminar -->
<div id="modal-eliminar" class="modal fixed inset-0 bg-black bg-opacity-60 z-50">
    <div class="modal-content bg-gray-800 w-full max-w-md rounded-xl p-6 border border-gray-700 shadow-xl">
        <h2 class="text-xl font-semibold text-red-400 mb-4">Eliminar encuesta</h2>

        <p class="text-gray-300">
            ¿Estás segura/o de que deseas eliminar esta encuesta?
            <br><br>
            <span class="text-red-400 font-medium">Esta acción no se puede deshacer.</span>
        </p>

        <div class="flex justify-end mt-6 space-x-3">
            <button type="button" data-close class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg">Cancelar</button>
            <button type="button" class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg">Eliminar</button>
        </div>
    </div>
</div>

<!-- Modal Compartir -->
<div id="modal-compartir" class="modal fixed inset-0 bg-black bg-opacity-60 z-50">
    <div class="modal-content bg-gray-800 w-full max-w-lg rounded-xl p-6 border border-gray-700 shadow-xl">
        <h2 class="text-xl font-semibold mb-4">Compartir encuesta</h2>

        <label class="block text-sm mb-2">Enlace largo</label>
        <input type="text" readonly value="https://forms.microsoft.com/s/ENCUESTA123"
               class="w-full p-2 bg-gray-900 border border-gray-700 rounded-lg text-white">

        <label class="block text-sm mt-4 mb-2">Enlace corto</label>
        <input type="text" readonly value="https://forms.ms/xYz12"
               class="w-full p-2 bg-gray-900 border border-gray-700 rounded-lg text-white">

        <label class="block text-sm mt-4 mb-2">Código QR</label>
        <div class="bg-gray-900 border border-gray-700 p-4 rounded-lg flex justify-center">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=ENCUESTA123" class="rounded-lg">
        </div>

        <div class="flex justify-end mt-6">
            <button type="button" data-close class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg">Cerrar</button>
        </div>
    </div>
</div>
<script>
document.querySelectorAll("[data-modal]").forEach(btn => {
    btn.addEventListener("click", () => {
        const modal = document.getElementById(btn.dataset.modal);
        modal.classList.add("show");
    });
});

document.querySelectorAll("[data-close]").forEach(btn => {
    btn.addEventListener("click", () => {
        const modal = btn.closest(".modal");
        modal.classList.remove("show");
    });
});

// Cerrar al hacer click fuera del contenido
document.querySelectorAll(".modal").forEach(modal => {
    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.classList.remove("show");
        }
    });
});
</script>

<script>
// Actualizar fecha y hora cada segundo
function updateDateTime() {
    const now = new Date();
    const options = { 
        year: 'numeric', 
        month: 'short', 
        day: '2-digit',
        hour: '2-digit', 
        minute: '2-digit',
        second: '2-digit'
    };
    document.getElementById('current-datetime').textContent = now.toLocaleDateString('es-ES', options);
}

// Actualizar inmediatamente y luego cada segundo
updateDateTime();
setInterval(updateDateTime, 1000);
</script>

</html>