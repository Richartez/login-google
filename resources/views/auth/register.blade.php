{{-- resources/views/auth/register.blade.php --}}
<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4 py-10 bg-gradient-to-br from-gray-50 via-white to-gray-100">
        <div class="w-full max-w-md">

            {{-- Formulario --}}
            <div class="rounded-2xl shadow-sm border border-gray-100 bg-white p-6 sm:p-10">
                <div class="md:hidden flex justify-center mb-6">
                    <div class="h-12 w-12 rounded-2xl bg-gray-900 flex items-center justify-center">
                        <x-application-logo class="h-7 w-7 fill-current text-white" />
                    </div>
                </div>

                <h2 class="text-2xl font-semibold text-gray-900">Crear cuenta</h2>
                <p class="mt-1 text-sm text-gray-500">
                    Completa la información para registrarte.
                </p>

                <x-input-error :messages="$errors->all()" class="mt-4" />

                <form method="POST" action="{{ route('register') }}" class="mt-6 space-y-5">
                    @csrf

                    <div>
                        <x-input-label for="name" value="Nombre completo" />
                        <x-text-input
                            id="name"
                            class="mt-2 block w-full"
                            type="text"
                            name="name"
                            :value="old('name')"
                            required
                            autofocus
                            placeholder="Tu nombre"
                        />
                    </div>

                    <div>
                        <x-input-label for="email" value="Correo electrónico" />
                        <x-text-input
                            id="email"
                            class="mt-2 block w-full"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
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
                            placeholder="••••••••"
                        />
                    </div>

                    <div>
                        <x-input-label for="password_confirmation" value="Confirmar contraseña" />
                        <x-text-input
                            id="password_confirmation"
                            class="mt-2 block w-full"
                            type="password"
                            name="password_confirmation"
                            required
                            placeholder="••••••••"
                        />
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="{{ route('login') }}"
                           class="text-sm font-medium text-gray-900 hover:underline">
                            ¿Ya tienes cuenta?
                        </a>

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center rounded-xl bg-gray-900 px-6 py-3 text-sm font-semibold text-white hover:bg-gray-800 transition"
                        >
                            Registrarme
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-guest-layout>
