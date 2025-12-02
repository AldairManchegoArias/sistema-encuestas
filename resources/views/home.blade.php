<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Your Voice') }} - Home</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css'])
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
                 <a href="{{ route('home') }}" class="flex items-center px-4 py-2 text-white bg-blue-600 rounded-lg">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                   Home
                </a>
                
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v3H8V5z"></path>
                    </svg>
                    Gestión de encuestas
                </a>
               <a href="{{ route('reports') }}" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    Reportería
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-lg">
                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                            <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="text-gray-300">Nombre:</span>
                            <span class="text-white font-medium">Aldair Manchego</span>
                        </div>
                        
                        <!-- Rol -->
                        <div class="flex items-center space-x-2 text-sm">
                            <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-300">Rol:</span>
                            <span class="text-white font-medium">Administrador</span>
                        </div>                
                        
                    </div>
                </div>
            </div>

            <!-- Welcome Section -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-white mb-4">
                    Bienvenido a Your Voice
                </h1>
                <p class="text-xl text-gray-300 mb-6">
                    Tu plataforma integral para la gestión de encuestas empresariales
                </p>
                <div class="flex justify-center">
                    <div class="bg-blue-600 text-white px-8 py-3 rounded-lg">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span class="font-semibold">Powered by Microsoft Forms</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats Dashboard -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 text-center">
                    <div class="text-3xl font-bold text-blue-400 mb-2">3</div>
                    <div class="text-gray-300">Encuestas Activas</div>
                    <div class="text-sm text-gray-500 mt-1">En progreso</div>
                </div>
                
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 text-center">
                    <div class="text-3xl font-bold text-green-400 mb-2">382</div>
                    <div class="text-gray-300">Respuestas Totales</div>
                    <div class="text-sm text-gray-500 mt-1">Este mes</div>
                </div>
                
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700 text-center">
                    <div class="text-3xl font-bold text-orange-400 mb-2">94%</div>
                    <div class="text-gray-300">Tasa de Participación</div>
                    <div class="text-sm text-gray-500 mt-1">Promedio general</div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-white mb-6">Acciones Rápidas</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    
                    <!-- Nueva Encuesta -->
                    <a href="https://forms.microsoft.com/" target="_blank"
                    class="group bg-black hover:bg-blue-700 rounded-xl p-5 text-center shadow-lg shadow-blue-900/20 transition-all">

                        <svg class="w-5 h-5 mx-auto mb-3 text-white group-hover:scale-110 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>

                        <div class="text-white font-semibold">Nueva Encuesta</div>
                        <div class="text-blue-100 text-sm mt-1">Crear en Forms</div>
                    </a>

                    <!-- Ver Encuestas -->
                    <a href="{{ route('dashboard') }}"
                    class="group bg-black hover:bg-gray-600 rounded-xl p-5 text-center shadow-lg shadow-black/20 transition-all">

                        <svg class="w-5 h-5 mx-auto mb-3 text-white group-hover:scale-110 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>

                        <div class="text-white font-semibold">Gestionar Encuestas</div>
                        <div class="text-gray-300 text-sm mt-1">Ver todas</div>
                    </a>

                    <!-- Reportería -->
                    <a href="{{ route('reports') }}"
                    class="group bg-black hover:bg-blue-700 rounded-xl p-5 text-center shadow-lg shadow-blue-900/20 transition-all">

                        <svg class="w-5 h-5 mx-auto mb-3 text-white group-hover:scale-110 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>

                        <div class="text-white font-semibold">Reportería</div>
                        <div class="text-green-100 text-sm mt-1">Analizar datos</div>
                    </a>

                    <!-- Destinatarios -->
                    <a href="{{ route('survey.recipients', 1) }}"
                    class="group bg-black hover:bg-purple-700 rounded-xl p-5 text-center shadow-lg shadow-purple-900/20 transition-all">

                        <svg class="w-5 h-5 mx-auto mb-3 text-white group-hover:scale-110 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>

                        <div class="text-white font-semibold">Destinatarios</div>
                        <div class="text-purple-100 text-sm mt-1">Gestionar contactos</div>
                    </a>

                </div>
            </div>
            <!-- Recent Activity -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-white mb-6">Actividad Reciente</h2>
                <div class="space-y-3">
                    <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-green-400 rounded-full mr-3"></div>
                                <span class="text-white">Nueva respuesta recibida - Encuesta de Satisfacción del Cliente</span>
                            </div>
                            <span class="text-gray-400 text-sm">Hace 5 min</span>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-blue-400 rounded-full mr-3"></div>
                                <span class="text-white">Encuesta "Asistencia a capacitaciones" enviada a 15 destinatarios</span>
                            </div>
                            <span class="text-gray-400 text-sm">Hace 2 horas</span>
                        </div>
                    </div>
                    
                    <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-orange-400 rounded-full mr-3"></div>
                                <span class="text-white">Reporte mensual generado exitosamente</span>
                            </div>
                            <span class="text-gray-400 text-sm">Ayer</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logout Button -->
            <div class="mt-8">
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        <svg class="w-3 h-3 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>


</html>