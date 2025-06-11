<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
            {{ __('Contáctanos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow rounded-2xl p-8">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Formulario de contacto</h1>
                <p class="text-gray-700 dark:text-gray-300 mb-6">
                    ¿Tienes alguna pregunta o sugerencia? ¡Nos encantaría saber de ti! Completa el siguiente formulario y te responderemos lo antes posible.
                </p>
                <livewire:contact-form />
            </div>
        </div>
    </div>
</x-app-layout>
