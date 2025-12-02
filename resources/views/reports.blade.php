<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Your Voice') }} - Reportería</title>
    
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
               <a href="{{ route('reports') }}" class="flex items-center px-4 py-2 text-white bg-blue-600 rounded-lg">
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
                <h1 class="text-2xl font-semibold text-white mb-2">Reportería</h1>
                <p class="text-gray-400">Descarga y analiza los resultados totalizados</p>
            </div>

            <!-- Filters Section -->
            <div class="bg-gray-800 rounded-lg p-6 mb-6 border border-gray-700">
                <div class="flex items-center mb-4">
                    <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.414A1 1 0 013 6.707V4z"></path>
                    </svg>
                    <h3 class="text-white font-medium">Filtros</h3>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <!-- Empresa Filter -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Empresa</label>
                        <div class="relative">
                            <select class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none">
                                <option value="">Empresa A - Tecnología SAS</option>
                                <option value="empresa-b">Empresa B - Consultoría</option>
                                <option value="empresa-c">Empresa C - Retail</option>
                            </select>
                            <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Encuesta Filter -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Encuesta:</label>
                        <div class="relative">
                            <select class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none">
                                <option value="">Satisfacción cliente Q4 2025</option>
                                <option value="capacitaciones">Asistencia a capacitaciones</option>
                                <option value="empleados">Satisfacción de empleados</option>
                            </select>
                            <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Período Filter -->
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Período</label>
                        <div class="relative">
                            <select class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none">
                                <option value="">Todas las fechas</option>
                                <option value="hoy">Hoy</option>
                                <option value="ultimo-mes">Último mes</option>
                                <option value="ultima-semana">Última semana</option>
                                <option value="ultimo-trimestre">Último trimestre</option>
                            </select>
                            <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Generate Report Button -->
                <div class="mt-6">
                    <button class="w-full flex items-center justify-center px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        Generar Reporte
                    </button>
                </div>
            </div>

            <!-- Report Card -->
            <div class="bg-gradient-to-br from-blue-600 to-purple-700 rounded-lg p-6 mb-6 text-white">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h2 class="text-xl font-semibold mb-2">Satisfacción cliente Q4 2025</h2>
                        <p class="text-blue-100 mb-1">Empresa: Empresa A - Tecnología SAS</p>
                        <p class="text-blue-100 mb-1">Período: Todas las fechas</p>
                        <p class="text-blue-100">Generado: 17/11/2025</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="p-2 bg-white/20 rounded-lg hover:bg-white/30">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                            </svg>
                        </button>
                        <button class="p-2 bg-white/20 rounded-lg hover:bg-white/30">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Statistics Dashboard -->
            <div class="grid grid-cols-4 gap-6 mb-6">
                <!-- Total Responses -->
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-gray-300 text-sm font-medium">Total Respuestas</h3>
                        <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-white mb-2">127</div>
                    <div class="text-green-400 text-sm">+12% vs mes anterior</div>
                </div>

                <!-- Average Satisfaction -->
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-gray-300 text-sm font-medium">Satisfacción Promedio</h3>
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-white mb-2">4.2/5</div>
                    <div class="text-green-400 text-sm">+0.3 vs mes anterior</div>
                </div>

                <!-- Response Rate -->
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-gray-300 text-sm font-medium">Tasa de Respuesta</h3>
                        <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-white mb-2">78%</div>
                    <div class="text-green-400 text-sm">+5% vs mes anterior</div>
                </div>

                <!-- NPS Score -->
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-gray-300 text-sm font-medium">NPS Score</h3>
                        <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-white mb-2">+65</div>
                    <div class="text-green-400 text-sm">+8 puntos vs mes anterior</div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-2 gap-6 mb-6">
                <!-- Chart 1 -->
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <h3 class="text-white font-medium mb-4">Distribución de Satisfacción</h3>
                    <div class="h-64 bg-gray-700 rounded-lg flex items-center justify-center">
                        <div class="text-center">
                            <svg class="w-16 h-16 text-gray-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            <p class="text-gray-500">Gráfico de barras</p>
                            <p class="text-gray-600 text-sm">Satisfacción por categoría</p>
                        </div>
                    </div>
                </div>

                <!-- Chart 2 -->
                <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                    <h3 class="text-white font-medium mb-4">Tendencia de Respuestas</h3>
                    <div class="h-64 bg-gray-700 rounded-lg flex items-center justify-center">
                        <div class="text-center">
                            <svg class="w-16 h-16 text-gray-500 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <p class="text-gray-500">Gráfico de líneas</p>
                            <p class="text-gray-600 text-sm">Respuestas por fecha</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Export Actions -->
            <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
                <h3 class="text-white font-medium mb-4">Exportar Datos</h3>
                <div class="flex space-x-4">
                    <button class="flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Exportar a Excel
                    </button>
                    <button class="flex items-center px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Exportar a PDF
                    </button>
                    <button class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                        </svg>
                        Compartir Enlace
                    </button>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="mt-6 bg-gray-800 rounded-lg p-6 border border-gray-700">
                <h3 class="text-white font-medium mb-4">Actividad Reciente</h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between py-2">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-green-400 rounded-full mr-3"></div>
                            <span class="text-gray-300">Nueva respuesta recibida - Encuesta Satisfacción Q4</span>
                        </div>
                        <span class="text-gray-500 text-sm">Hace 5 min</span>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-blue-400 rounded-full mr-3"></div>
                            <span class="text-gray-300">Reporte generado - Análisis Capacitaciones</span>
                        </div>
                        <span class="text-gray-500 text-sm">Hace 2 horas</span>
                    </div>
                    <div class="flex items-center justify-between py-2">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
                            <span class="text-gray-300">Encuesta programada - Evaluación Trimestral</span>
                        </div>
                        <span class="text-gray-500 text-sm">Hace 1 día</span>
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