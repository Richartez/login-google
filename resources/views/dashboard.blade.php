<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Panel de Control
        </h2>
        <p class="text-sm text-gray-500">
            Bienvenido al sistema, {{ Auth::user()->name }}
        </p>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

 
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

 
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
