<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Your Voice') }} - Destinatarios</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <!-- Header Superior -->
    <div class="bg-black border-b border-black px-6 py-3">
        
    </div>
    
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
                
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg">
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
            <div class="mb-6">
                <h1 class="text-2xl font-semibold text-white mb-2">Encuesta: Satisfacción del Cliente Q4 2025</h1>
                <p class="text-gray-400">Gestiona tu encuesta y sus destinatarios</p>
            </div>

            <!-- Tab Navigation -->
            <div class="flex mb-6 border-b border-gray-700">
                <button id="btnPreguntas" class="px-6 py-2 text-black hover:text-white border-b-2 border-transparent hover:border-blue-500">
                    Preguntas
                </button>
                <button id="btnDestinatarios" class="px-6 py-2 text-black border-b-2 border-blue-500">
                    Destinatarios
                </button>
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-4 gap-4 mb-6">
                <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
                    <div class="text-2xl font-bold text-white">20</div>
                    <div class="text-gray-400 text-sm">Total</div>
                </div>
                <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
                    <div class="text-2xl font-bold text-white">18</div>
                    <div class="text-gray-400 text-sm">Enviados</div>
                </div>
                <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
                    <div class="text-2xl font-bold text-white">15</div>
                    <div class="text-gray-400 text-sm">Completados</div>
                </div>
                <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
                    <div class="text-2xl font-bold text-white">3</div>
                    <div class="text-gray-400 text-sm">Pendientes</div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex space-x-4 mb-6">
                <button class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                    </svg>
                    Cargar desde Excel
                </button>
                <button class="flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Agregar Manual
                </button>
                <button class="flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                    </svg>
                    Exportar Lista
                </button>
                <div class="flex-1">
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" placeholder="Buscar destinatario" class="w-full pl-10 pr-4 py-2 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-gray-800 rounded-lg border border-gray-700 overflow-hidden">
                <table class="w-full">
                    <thead class="bg-gray-700">
                        <tr>
                            <th class="px-4 py-3 text-left">
                                <input type="checkbox" class="rounded bg-gray-600 border-gray-500 text-blue-600">
                            </th>
                            <th class="px-4 py-3 text-left text-gray-300 font-medium">Nombre</th>
                            <th class="px-4 py-3 text-left text-gray-300 font-medium">Correo Electrónico</th>
                            <th class="px-4 py-3 text-left text-gray-300 font-medium">Estado</th>
                            <th class="px-4 py-3 text-left text-gray-300 font-medium">Fecha Envío</th>
                            <th class="px-4 py-3 text-left text-gray-300 font-medium">Abierto</th>
                            <th class="px-4 py-3 text-left text-gray-300 font-medium">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-750">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="rounded bg-gray-600 border-gray-500 text-blue-600">
                            </td>
                            <td class="px-4 py-3 text-white">Juan Perez</td>
                            <td class="px-4 py-3 text-blue-400">
                                <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                                juan.perez@empresa.com
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-green-600 text-white text-xs px-2 py-1 rounded">Recibido</span>
                            </td>
                            <td class="px-4 py-3 text-gray-300">10/11/2025</td>
                            <td class="px-4 py-3">
                                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-green-400 ml-1">Sí</span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex space-x-2">
                                    <button class="text-blue-400 hover:text-blue-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-400 hover:text-red-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                    <button class="text-gray-400 hover:text-gray-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-750">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="rounded bg-gray-600 border-gray-500 text-blue-600">
                            </td>
                            <td class="px-4 py-3 text-white">Carlos Lopez</td>
                            <td class="px-4 py-3 text-blue-400">
                                <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                                carlos.lopez@empresa.com
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-orange-600 text-white text-xs px-2 py-1 rounded">Pendiente</span>
                            </td>
                            <td class="px-4 py-3 text-gray-300">10/09/2025</td>
                            <td class="px-4 py-3 text-gray-400">No</td>
                            <td class="px-4 py-3">
                                <div class="flex space-x-2">
                                    <button class="text-blue-400 hover:text-blue-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-400 hover:text-red-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                    <button class="text-gray-400 hover:text-gray-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-750">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="rounded bg-gray-600 border-gray-500 text-blue-600">
                            </td>
                            <td class="px-4 py-3 text-white">Ana Muñoz</td>
                            <td class="px-4 py-3 text-blue-400">
                                <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                                ana.munoz@red.com
                            </td>
                            <td class="px-4 py-3">
                                <span class="bg-green-600 text-white text-xs px-2 py-1 rounded">Completado</span>
                            </td>
                            <td class="px-4 py-3 text-gray-300">08/06/2025</td>
                            <td class="px-4 py-3">
                                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-green-400 ml-1">Sí</span>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex space-x-2">
                                    <button class="text-blue-400 hover:text-blue-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-400 hover:text-red-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                    <button class="text-gray-400 hover:text-gray-300">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex justify-between items-center mt-6">
                <div class="text-sm text-gray-400">
                    Mostrando <span class="font-medium text-white">1-3</span> de <span class="font-medium text-white">20</span> destinatarios
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 bg-gray-700 text-gray-400 rounded hover:bg-gray-600">
                        Anterior
                    </button>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded">
                        1
                    </button>
                    <button class="px-3 py-1 bg-gray-700 text-gray-400 rounded hover:bg-gray-600">
                        Siguiente
                    </button>
                </div>
            </div>

            <!-- Bulk Actions -->
            <div class="mt-6">
                <h3 class="text-white font-medium mb-4">Acciones Masivas</h3>
                <div class="flex space-x-4">
                    <button class="flex items-center px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Enviar a seleccionados
                    </button>
                    <button class="flex items-center px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Reenviar a Pendientes
                    </button>
                    <button class="flex items-center px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Eliminar seleccionados
                    </button>
                </div>
            </div>

            <!-- Línea divisora -->
            <div class="mt-16 mb-16">
                <hr class="border-white border-t-1">
            </div>

            <!-- Sección de Preguntas de la Encuesta -->
            <div class="mt-32 pt-16">
                <h2 class="text-2xl font-semibold text-white mb-8"></h2>

                <!-- Statistics Cards for Preguntas -->
                <div class="grid grid-cols-4 gap-4 mb-6">
                    <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
                        <div class="text-2xl font-bold text-white">5</div>
                        <div class="text-gray-400 text-sm">Total Preguntas</div>
                    </div>
                    <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
                        <div class="text-2xl font-bold text-white">20</div>
                        <div class="text-gray-400 text-sm">Respuestas Recibidas</div>
                    </div>
                    <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
                        <div class="text-2xl font-bold text-white">100%</div>
                        <div class="text-gray-400 text-sm">Tasa de Respuesta</div>
                    </div>
                    <div class="bg-gray-800 rounded-lg p-4 text-center border border-gray-700">
                        <div class="text-2xl font-bold text-white">4.2/5</div>
                        <div class="text-gray-400 text-sm">Satisfacción Promedio</div>
                    </div>
                </div>

                <!-- Questions List -->
                <div class="space-y-4">
                    <!-- Pregunta 1 -->
                    <div class="bg-gray-800 rounded-lg border border-gray-700 p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex-1">
                                <h3 class="text-white font-medium text-lg mb-2">1. ¿Cómo calificaría nuestro servicio en general?</h3>
                                <span class="text-sm text-gray-400">Tipo: Selección única</span>
                            </div>
                            <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center">
                                <div class="text-2xl font-bold">20</div>
                                <div class="text-xs">respuestas</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Excelente</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-green-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 40%">
                                        <span class="text-white text-xs font-medium">8</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">40%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Muy bueno</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-blue-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 35%">
                                        <span class="text-white text-xs font-medium">7</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">35%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Bueno</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-yellow-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 20%">
                                        <span class="text-white text-xs font-medium">4</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">20%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Regular</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-orange-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 5%">
                                        <span class="text-white text-xs font-medium">1</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">5%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Malo</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-red-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 0%">
                                        <span class="text-white text-xs font-medium">0</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">0%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta 2 -->
                    <div class="bg-gray-800 rounded-lg border border-gray-700 p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex-1">
                                <h3 class="text-white font-medium text-lg mb-2">2. ¿Qué aspectos considera más importantes? (Selección múltiple)</h3>
                                <span class="text-sm text-gray-400">Tipo: Selección múltiple</span>
                            </div>
                            <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center">
                                <div class="text-2xl font-bold">20</div>
                                <div class="text-xs">respuestas</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <span class="text-gray-300 w-48">Calidad del producto</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-purple-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 90%">
                                        <span class="text-white text-xs font-medium">18</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">90%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-48">Atención al cliente</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-purple-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 75%">
                                        <span class="text-white text-xs font-medium">15</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">75%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-48">Precio competitivo</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-purple-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 65%">
                                        <span class="text-white text-xs font-medium">13</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">65%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-48">Tiempo de entrega</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-purple-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 55%">
                                        <span class="text-white text-xs font-medium">11</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">55%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-48">Soporte técnico</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-purple-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 45%">
                                        <span class="text-white text-xs font-medium">9</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">45%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta 3 -->
                    <div class="bg-gray-800 rounded-lg border border-gray-700 p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex-1">
                                <h3 class="text-white font-medium text-lg mb-2">3. ¿Recomendaría nuestros servicios a otros?</h3>
                                <span class="text-sm text-gray-400">Tipo: Selección única</span>
                            </div>
                            <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center">
                                <div class="text-2xl font-bold">20</div>
                                <div class="text-xs">respuestas</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Definitivamente sí</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-green-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 50%">
                                        <span class="text-white text-xs font-medium">10</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">50%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Probablemente sí</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-blue-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 35%">
                                        <span class="text-white text-xs font-medium">7</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">35%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">No estoy seguro</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-yellow-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 10%">
                                        <span class="text-white text-xs font-medium">2</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">10%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Probablemente no</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-orange-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 5%">
                                        <span class="text-white text-xs font-medium">1</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">5%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Definitivamente no</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-red-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 0%">
                                        <span class="text-white text-xs font-medium">0</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">0%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta 4 -->
                    <div class="bg-gray-800 rounded-lg border border-gray-700 p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex-1">
                                <h3 class="text-white font-medium text-lg mb-2">4. ¿Con qué frecuencia utiliza nuestros servicios?</h3>
                                <span class="text-sm text-gray-400">Tipo: Selección única</span>
                            </div>
                            <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center">
                                <div class="text-2xl font-bold">20</div>
                                <div class="text-xs">respuestas</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Diariamente</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-indigo-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 25%">
                                        <span class="text-white text-xs font-medium">5</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">25%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Semanalmente</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-indigo-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 45%">
                                        <span class="text-white text-xs font-medium">9</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">45%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Mensualmente</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-indigo-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 20%">
                                        <span class="text-white text-xs font-medium">4</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">20%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-gray-300 w-32">Ocasionalmente</span>
                                <div class="flex-1 mx-4 bg-gray-700 rounded-full h-6">
                                    <div class="bg-indigo-500 h-6 rounded-full flex items-center justify-end pr-2" style="width: 10%">
                                        <span class="text-white text-xs font-medium">2</span>
                                    </div>
                                </div>
                                <span class="text-gray-400 w-16 text-right">10%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Pregunta 5 - Texto -->
                    <div class="bg-gray-800 rounded-lg border border-gray-700 p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex-1">
                                <h3 class="text-white font-medium text-lg mb-2">5. ¿Tiene algún comentario adicional sobre nuestros servicios?</h3>
                                <span class="text-sm text-gray-400">Tipo: Texto abierto</span>
                            </div>
                            <div class="bg-blue-600 text-white px-4 py-2 rounded-lg text-center">
                                <div class="text-2xl font-bold">15</div>
                                <div class="text-xs">respuestas</div>
                            </div>
                        </div>
                        <div class="bg-gray-700 rounded p-4">
                            <p class="text-gray-300 text-sm italic mb-2">"Excelente servicio, muy satisfecho con la atención recibida."</p>
                            <p class="text-gray-300 text-sm italic mb-2">"Podrían mejorar los tiempos de respuesta, pero en general buen servicio."</p>
                            <p class="text-gray-300 text-sm italic mb-2">"Muy profesionales, seguiré utilizando sus servicios."</p>
                            <div class="text-center mt-4">
                                <button class="text-blue-400 hover:text-blue-300 text-sm">Ver todas las respuestas →</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

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