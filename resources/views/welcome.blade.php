<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-slate-900 antialiased">
    {{-- Background --}}
    <div class="relative min-h-screen overflow-hidden">
        <div class="pointer-events-none absolute inset-0">
            <div class="absolute -top-24 right-[-10rem] h-[28rem] w-[28rem] rounded-full bg-emerald-200/40 blur-3xl"></div>
            <div class="absolute top-40 left-[-12rem] h-[26rem] w-[26rem] rounded-full bg-sky-200/40 blur-3xl"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-slate-50/70 via-white to-white"></div>
        </div>

        {{-- Navbar --}}
        <header class="relative z-10">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <a href="{{ url('/') }}" class="flex items-center gap-2">
                        <div class="grid h-9 w-9 place-items-center rounded-xl bg-slate-900 text-white shadow-sm">
                            <span class="text-sm font-semibold">{{ strtoupper(substr(config('app.name','A'), 0, 1)) }}</span>
                        </div>
                        <span class="text-sm font-semibold tracking-tight">{{ config('app.name', 'Laravel') }}</span>
                    </a>

                    @if (Route::has('login'))
                        <nav class="flex items-center gap-2">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                   class="inline-flex items-center gap-2 rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-800 transition">
                                    Ir al Dashboard
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 17L17 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                   class="rounded-xl px-4 py-2 text-sm font-semibold text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition">
                                    Iniciar sesión
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                       class="inline-flex items-center rounded-xl border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-900 shadow-sm hover:bg-slate-50 transition">
                                        Crear cuenta
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </div>
            </div>
        </header>

        {{-- Main --}}
        <main class="relative z-10">
            {{-- Hero --}}
            <section class="mx-auto max-w-6xl px-4 pt-14 pb-10 sm:px-6 lg:px-8">
                <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
                    <div>
                        <p class="inline-flex items-center gap-2 rounded-full bg-slate-900/5 px-3 py-1 text-xs font-semibold text-slate-700">
                            <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                            Plataforma lista para producción
                        </p>

                        <h1 class="mt-4 text-4xl font-bold tracking-tight sm:text-5xl">
                            Gestiona tu sistema con una
                            <span class="text-emerald-600">experiencia profesional</span>
                        </h1>

                        <p class="mt-4 max-w-xl text-base leading-relaxed text-slate-600">
                            Interfaz limpia, rápida y consistente. Acceso seguro, dashboard y componentes modernos para que tu proyecto
                            se vea serio desde el primer día.
                        </p>

                        <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:items-center">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                   class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-slate-800 transition">
                                    Abrir Dashboard
                                </a>
                            @else
                                <a href="{{ Route::has('register') ? route('register') : route('login') }}"
                                   class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-slate-800 transition">
                                    Empezar ahora
                                </a>

                                <a href="{{ route('login') }}"
                                   class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-900 shadow-sm hover:bg-slate-50 transition">
                                    Ya tengo cuenta
                                </a>
                            @endauth
                        </div>

                        <div class="mt-8 grid grid-cols-3 gap-4 max-w-xl">
                            <div class="rounded-2xl border border-slate-200 bg-white/70 p-4 shadow-sm">
                                <p class="text-sm font-semibold">Seguro</p>
                                <p class="mt-1 text-xs text-slate-600">Auth, roles, control</p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white/70 p-4 shadow-sm">
                                <p class="text-sm font-semibold">Rápido</p>
                                <p class="mt-1 text-xs text-slate-600">Vite + Tailwind</p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white/70 p-4 shadow-sm">
                                <p class="text-sm font-semibold">Escalable</p>
                                <p class="mt-1 text-xs text-slate-600">Componentes limpios</p>
                            </div>
                        </div>
                    </div>

                    {{-- Right card --}}
                    <div class="relative">
                        <div class="rounded-3xl border border-slate-200 bg-white/70 p-6 shadow-sm backdrop-blur">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm font-semibold">Panel de control</p>
                                    <p class="text-xs text-slate-600">Resumen rápido del sistema</p>
                                </div>
                                <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">
                                    Online
                                </span>
                            </div>

                            <div class="mt-6 grid gap-4 sm:grid-cols-2">
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <p class="text-xs text-slate-600">Usuarios</p>
                                    <p class="mt-2 text-2xl font-bold">—</p>
                                    <p class="mt-1 text-xs text-slate-500">Control por roles</p>
                                </div>
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <p class="text-xs text-slate-600">Eventos</p>
                                    <p class="mt-2 text-2xl font-bold">—</p>
                                    <p class="mt-1 text-xs text-slate-500">Seguimiento y reportes</p>
                                </div>
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <p class="text-xs text-slate-600">Actividad</p>
                                    <p class="mt-2 text-2xl font-bold">—</p>
                                    <p class="mt-1 text-xs text-slate-500">Bitácora y auditoría</p>
                                </div>
                                <div class="rounded-2xl border border-slate-200 bg-white p-4">
                                    <p class="text-xs text-slate-600">Soporte</p>
                                    <p class="mt-2 text-2xl font-bold">24/7</p>
                                    <p class="mt-1 text-xs text-slate-500">Documentación interna</p>
                                </div>
                            </div>

                            <div class="mt-6 rounded-2xl bg-slate-900 p-4 text-white">
                                <p class="text-sm font-semibold">Tip</p>
                                <p class="mt-1 text-xs text-white/80">
                                    Personaliza el contenido con tu nombre del sistema y cambia las métricas a datos reales.
                                </p>
                            </div>
                        </div>

                        <div class="absolute -bottom-8 -right-6 hidden h-24 w-24 rounded-3xl bg-emerald-500/20 blur-2xl lg:block"></div>
                    </div>
                </div>
            </section>

            {{-- Features --}}
            <section class="mx-auto max-w-6xl px-4 pb-16 sm:px-6 lg:px-8">
                <div class="grid gap-6 lg:grid-cols-3">
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <p class="text-sm font-semibold">Diseño limpio</p>
                        <p class="mt-2 text-sm text-slate-600">
                            Tipografía Inter, espacios consistentes y componentes tipo producto real.
                        </p>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <p class="text-sm font-semibold">CTA claros</p>
                        <p class="mt-2 text-sm text-slate-600">
                            Botones bien definidos: iniciar sesión, crear cuenta o ir al dashboard.
                        </p>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <p class="text-sm font-semibold">Listo para crecer</p>
                        <p class="mt-2 text-sm text-slate-600">
                            Puedes meter aquí tu branding (logo, colores, copy) sin rearmar toda la estructura.
                        </p>
                    </div>
                </div>
            </section>
        </main>

        {{-- Footer --}}
        <footer class="relative z-10 border-t border-slate-200 bg-white/70 backdrop-blur">
            <div class="mx-auto max-w-6xl px-4 py-8 sm:px-6 lg:px-8">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <p class="text-xs text-slate-600">
                        © {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.
                    </p>
                    <div class="flex items-center gap-4 text-xs">
                        <a class="text-slate-600 hover:text-slate-900" href="https://laravel.com/docs" target="_blank" rel="noreferrer">Docs</a>
                        <a class="text-slate-600 hover:text-slate-900" href="https://laracasts.com" target="_blank" rel="noreferrer">Laracasts</a>
                        <a class="text-slate-600 hover:text-slate-900" href="https://github.com/laravel/laravel" target="_blank" rel="noreferrer">GitHub</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
