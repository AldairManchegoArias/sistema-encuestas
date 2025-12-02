@extends('layouts.auth')

@section('content')
<div class="w-full max-w-md space-y-8">
    <!-- Header -->
    <div class="text-center">
        <h1 class="text-4xl font-bold text-white mb-2">Your voice system</h1>
        <p class="text-lg text-gray-200">Your tool for measuring and understanding satisfaction.</p>
    </div>

    <!-- Verification Card -->
    <div class="glass-effect rounded-2xl p-8 shadow-2xl">
        <div class="text-center">
            <!-- Success Icon -->
            
            
            <!-- Title -->
            <h2 class="text-2xl font-semibold text-white mb-4">¡Registro Exitoso!</h2>
            
            <!-- Message -->
            <div class="text-gray-300 mb-8 space-y-4">
                <p class="text-lg">
                    Tu cuenta ha sido creada exitosamente.
                </p>
                <div class="bg-blue-900/30 border border-blue-600 rounded-lg p-4">
                    <p class="font-semibold text-orange-400 mb-2">
                        📧 Verifica tu correo electrónico
                    </p>
                    <p class="text-sm">
                        Hemos enviado un enlace de verificación a tu correo electrónico. 
                        <strong>Por favor, revisa tu bandeja de entrada y haz clic en el enlace para activar tu cuenta.</strong>
                    </p>
                </div>
                <p class="text-sm text-gray-400">
                    Si no recibes el correo en unos minutos, revisa tu carpeta de spam o promociones.
                </p>
            </div>
            
            <!-- Action Buttons -->
            <div class="space-y-3">
                <a href="{{ route('login') }}" class="block w-full py-3 bg-orange-500 text-white font-semibold rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all">
                    Ir al Login
                </a>
                
                <button onclick="resendEmail()" id="resend-btn" class="block w-full py-3 bg-gray-600 text-white font-semibold rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 transition-all">
                    Reenviar correo de verificación
                </button>
            </div>
            
            <!-- Additional Info -->
            <div class="mt-6 pt-6 border-t border-gray-600">
                <p class="text-xs text-gray-400">
                    ¿Tienes problemas? Contacta a soporte: 
                    <a href="mailto:soporte@yourvoice.com" class="text-orange-400 hover:text-orange-300">soporte@yourvoice.com</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function resendEmail() {
    const btn = document.getElementById('resend-btn');
    const originalText = btn.textContent;
    
    // Mostrar estado de carga
    btn.textContent = 'Reenviando...';
    btn.disabled = true;
    btn.classList.add('opacity-50');
    
    // Simular reenvío (aquí iría la llamada AJAX real)
    setTimeout(() => {
        btn.textContent = '✓ Correo reenviado';
        btn.classList.remove('opacity-50');
        btn.classList.add('bg-green-600');
        
        // Restaurar botón después de 3 segundos
        setTimeout(() => {
            btn.textContent = originalText;
            btn.disabled = false;
            btn.classList.remove('bg-green-600');
            btn.classList.add('bg-gray-600');
        }, 3000);
    }, 2000);
}
</script>
@endsection