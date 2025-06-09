<div>
    <form wire:submit.prevent="submit" class="max-w-lg mx-auto p-4 bg-white rounded shadow">
        <div class="mb-4">
            <label for="name" class="block font-medium text-gray-700">Nombre</label>
            <input type="text" id="name" wire:model.defer="name"
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
            @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block font-medium text-gray-700">Correo electrónico</label>
            <input type="email" id="email" wire:model.defer="email"
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500">
            @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="block font-medium text-gray-700">Mensaje</label>
            <textarea id="message" wire:model.defer="message" rows="4"
                class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-red-500 focus:border-red-500"></textarea>
            @error('message') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit"
            class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition duration-200">
            Enviar
        </button>

        @if (session()->has('success'))
            <div
                class="mt-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded shadow">
                {{ session('success') }}
            </div>
        @endif
    </form>
</div>
