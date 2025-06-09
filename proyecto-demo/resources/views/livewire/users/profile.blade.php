<div class="max-w-md mx-auto p-6 bg-white rounded shadow">

    @if (session()->has('message'))
        <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('message') }}
        </div>
    @endif

    @if (!$editMode)
        <h2 class="text-xl font-bold mb-4">Perfil de usuario</h2>

        <p><strong>Nombre:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>

        <button wire:click="toggleEdit" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Editar perfil
        </button>
    @else
        <h2 class="text-xl font-bold mb-4">Editar perfil</h2>

        <form wire:submit.prevent="save" class="space-y-4">
            <div>
                <label class="block font-semibold mb-1">Nombre</label>
                <input type="text" wire:model.defer="name" class="w-full rounded border-gray-300 shadow-sm" />
                @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block font-semibold mb-1">Email</label>
                <input type="email" wire:model.defer="email" class="w-full rounded border-gray-300 shadow-sm" />
                @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Guardar
            </button>

            <button type="button" wire:click="toggleEdit" class="ml-2 bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">
                Cancelar
            </button>
        </form>
    @endif
</div>
