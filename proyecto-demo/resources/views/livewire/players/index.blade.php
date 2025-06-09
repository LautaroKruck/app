<div class="p-4">

    {{-- Filtros --}}
    <div class="mb-6 flex flex-col md:flex-row md:items-center md:space-x-4 space-y-2 md:space-y-0">
        <input
            type="text"
            wire:model.debounce.300ms="search"
            placeholder="Buscar jugador..."
            class="border border-gray-300 rounded-lg px-4 py-2 w-full md:w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-500"
        />

        <select
            wire:model="filterPosition"
            class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            <option value="">Todas las posiciones</option>
            @foreach($positions as $position)
                <option value="{{ $position->id }}">{{ $position->name }}</option>
            @endforeach
        </select>
    </div>

    {{-- Jugadores --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($players as $player)
            <div class="bg-white shadow-md rounded-xl p-5 text-center hover:shadow-lg transition duration-200">
                <img
                    src="{{ $player->photo_url ?? 'https://via.placeholder.com/100' }}"
                    alt="Foto de {{ $player->name }}"
                    class="w-24 h-24 rounded-full mx-auto mb-4 object-cover"
                />

                <h3 class="text-xl font-bold text-gray-800">{{ $player->name }}</h3>

                {{-- Muestra correctamente el nombre de la posición --}}
                <p class="text-blue-600 font-medium">
                    {{ $player->position->name ?? 'Sin posición' }}
                </p>

                <p class="text-sm text-gray-500 mt-1">Edad: {{ $player->age }}</p>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500">
                No se encontraron jugadores.
            </div>
        @endforelse
    </div>

</div>
