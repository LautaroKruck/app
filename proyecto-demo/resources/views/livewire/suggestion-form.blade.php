<div class="max-w-xl mx-auto">
    @if ($successMessage)
        <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ $successMessage }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6 bg-white p-6 rounded-lg shadow">
        <div>
            <label for="contact_name" class="block font-semibold text-gray-700 mb-1">Tu nombre</label>
            <input type="text" id="contact_name" wire:model.defer="contact_name"
                   class="w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"
                   placeholder="Ej. Juan Pérez" autocomplete="name" />
            @error('contact_name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="contact_email" class="block font-semibold text-gray-700 mb-1">Tu correo electrónico</label>
            <input type="email" id="contact_email" wire:model.defer="contact_email"
                   class="w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"
                   placeholder="Ej. juan@example.com" autocomplete="email" />
            @error('contact_email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="suggested_name" class="block font-semibold text-gray-700 mb-1">Nombre del jugador sugerido</label>
            <input type="text" id="suggested_name" wire:model.defer="suggested_name"
                   class="w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"
                   placeholder="Ej. Lionel Messi" />
            @error('suggested_name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="suggested_age" class="block font-semibold text-gray-700 mb-1">Edad</label>
            <input type="number" id="suggested_age" wire:model.defer="suggested_age"
                   class="w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"
                   placeholder="Ej. 21" min="10" max="60" />
            @error('suggested_age') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="suggested_nationality" class="block font-semibold text-gray-700 mb-1">Nacionalidad</label>
            <input type="text" id="suggested_nationality" wire:model.defer="suggested_nationality"
                   class="w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"
                   placeholder="Ej. Argentina" />
            @error('suggested_nationality') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="suggested_position" class="block font-semibold text-gray-700 mb-1">Posición</label>
            <input type="text" id="suggested_position" wire:model.defer="suggested_position"
                   class="w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"
                   placeholder="Ej. Delantero" />
            @error('suggested_position') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="message" class="block font-semibold text-gray-700 mb-1">Mensaje (opcional)</label>
            <textarea id="message" wire:model.defer="message"
                      class="w-full rounded-md border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"
                      rows="4" placeholder="Cuéntanos por qué debería estar en Elite Transfer..."></textarea>
            @error('message') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="text-right">
            <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-md transition disabled:opacity-50"
                    wire:loading.attr="disabled">
                <span wire:loading.remove>Enviar sugerencia</span>
                <span wire:loading>Enviando...</span>
            </button>
        </div>
    </form>
</div>
