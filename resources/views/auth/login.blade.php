<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4 py-10 bg-gradient-to-br from-gray-50 via-white to-gray-100">
        {{-- ANCHO FIJO Y CENTRADO --}}
        <div class="w-full max-w-md">

            {{-- Formulario Login --}}
            <div class="rounded-2xl shadow-sm border border-gray-100 bg-white p-6 sm:p-10">

                <h1 class="text-2xl font-semibold text-gray-900">Iniciar sesión</h1>
                <p class="mt-1 text-sm text-gray-500">Ingresa tus datos para continuar.</p>

                <x-auth-session-status class="mt-4" :status="session('status')" />
                <x-input-error :messages="$errors->get('email')" class="mt-4" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-5">
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
                            autocomplete="username"
                            placeholder="correo@ejemplo.com"
                        />
                    </div>

                    <div>
                        <x-input-label for="password" value="Contraseña" />
                        <x-text-input
                            id="password"
                            class="mt-2 block w-full"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="••••••••"
                        />
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="remember"
                                class="rounded border-gray-300 text-gray-900">
                            Recordarme
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-gray-700 hover:underline">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif
                    </div>

                    <button
                        type="submit"
                        class="w-full rounded-xl bg-gray-900 px-4 py-3 text-sm font-semibold text-white hover:bg-gray-800 transition">
                        Entrar
                    </button>

                    {{-- Link a registro (no se confunde con el botón) --}}
                    @if (Route::has('register'))
                        <p class="text-center text-sm text-gray-600 pt-2">
                            ¿No tienes cuenta?
                            <a href="{{ route('register') }}" class="font-semibold text-gray-900 hover:underline">
                                Crear cuenta
                            </a>
                        </p>
                    @endif
                </form>

            </div>
        </div>
    </div>
</x-guest-layout>
