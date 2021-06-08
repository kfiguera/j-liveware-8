<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Últimos Cursos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-3xl text-gray-700 mb-2 uppercase ">Últimos Cursos</h1>
                <h2 class="text-xl text-gray-600 ">Fórmate online como profesional en tecnología</h2>
                <h3 class="text-lg text-gray-600 ">70% de los graduados duplica sus ingresos</h3>
            </div>
            <livewire:course-list>
        </div>
    </div>
</x-app-layout>

