<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contáctanos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">
                        ¿Tienes alguna pregunta o sugerencia? ¡Nos encantaría saber de ti! Usa el siguiente formulario para enviarnos un mensaje.
                    </p>
                    <livewire:contact-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
