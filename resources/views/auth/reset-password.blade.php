<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4 py-10 bg-gradient-to-br from-gray-50 via-white to-gray-100">
        <div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch">

            {{-- Lado izquierdo (branding) --}}
            <div class="hidden md:flex rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                <div class="w-full p-10 flex flex-col justify-between bg-gradient-to-br from-gray-900 to-gray-800 text-white">
                    <div>
                        <div class="flex items-center gap-3">
                            <div class="h-12 w-14 rounded-2xl bg-white/10 flex items-center justify-center">
                                <x-application-logo class="h-7 w-7 fill-current text-white" />
                            </div>
                            <div>
                                <p class="text-sm text-white/70">Recuperación de acceso</p>
                                <h1 class="text-2xl font-semibold">Tu Sistema</h1>
                            </div>
                        </div>

                        <p class="mt-6 text-white/80 leading-relaxed">
                            Escribe tu correo y te enviaremos un enlace para restablecer tu contraseña.
                        </p>

                        <ul class="mt-8 space-y-3 text-sm text-white/80">
                            <li class="flex gap-2"><span class="h-2 w-2 mt-2 bg-emerald-400 rounded-full"></span>Proceso seguro</li>
                            <li class="flex gap-2"><span class="h-2 w-2 mt-2 bg-emerald-400 rounded-full"></span>Enlace temporal</li>
                            <li class="flex gap-2"><span class="h-2 w-2 mt-2 bg-emerald-400 rounded-full"></span>Acceso rápido</li>
                        </ul>
                    </div>

                    <p class="text-xs text-white/60">
                        © {{ date('Y') }} Tu Sistema. Todos los derechos reservados.
                    </p>
                </div>
            </div>

            {{-- Formulario --}}
            <div class="rounded-2xl shadow-sm border border-gray-100 bg-white p-6 sm:p-10">
                <h2 class="text-2xl font-semibold text-gray-900">Olvidé mi contraseña</h2>
                <p class="mt-1 text-sm text-gray-500">
                    Ingresa tu correo electrónico y te enviaremos el enlace de recuperación.
                </p>

                <x-auth-session-status class="mt-4" :status="session('status')" />
                <x-input-error :messages="$errors->get('email')" class="mt-4" />

                <form method="POST" action="{{ route('password.email') }}" class="mt-6 space-y-5">
                    @csrf

                    <div>
                        <x-input-label for="email" value="Correo electrónico" />
                        <x-text-input
                            id="email"
                            class="mt-2 block w-full"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            placeholder="correo@ejemplo.com"
                        />
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-xl bg-gray-900 px-4 py-3 text-sm font-semibold text-white hover:bg-gray-800 transition"
                    >
                        Enviar enlace de recuperación
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-gray-600">
                    ¿Ya la recordaste?
                    <a href="{{ route('login') }}" class="font-semibold text-gray-900 hover:underline">
                        Volver a iniciar sesión
                    </a>
                </p>
            </div>

        </div>
    </div>
</x-guest-layout>
