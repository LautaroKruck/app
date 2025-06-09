<div class="max-w-5xl mx-auto p-6 space-y-10">

    {{-- Ficha del jugador --}}
    <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col md:flex-row items-start md:items-center gap-6">
        
        {{-- Foto del jugador --}}
        <div class="flex-shrink-0 w-full md:w-1/3 flex justify-center">
            <img src="{{ $player->photo_url ?? asset('images/default-player.png') }}"
                 alt="Foto del jugador"
                 class="w-48 h-48 object-cover rounded-full border-4 border-blue-200 shadow">
        </div>

        {{-- Información del jugador --}}
        <div class="w-full md:w-2/3 space-y-3">
            <h1 class="text-3xl font-extrabold text-gray-800">{{ $player->name }}</h1>

            <div class="text-gray-600">
                <p><span class="font-semibold text-gray-800">Edad:</span> {{ $player->age }}</p>
                <p><span class="font-semibold text-gray-800">Posición:</span> {{ $player->position->name ?? 'Sin posición' }}</p>
                <p><span class="font-semibold text-gray-800">Nacionalidad:</span> {{ $player->nationality ?? 'Desconocida' }}</p>
                <p><span class="font-semibold text-gray-800">Equipo:</span> {{ $player->team ?? 'Sin equipo' }}</p>
            </div>

            @if($player->bio)
                <div class="text-gray-700 mt-4">
                    <p>{{ $player->bio }}</p>
                </div>
            @endif
        </div>
    </div>

    {{-- Galería multimedia --}}
    @if($player->gallery && $player->gallery->count())
        <div>
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Galería</h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                @foreach($player->gallery as $media)
                    @if(Str::endsWith($media->url, ['.jpg', '.jpeg', '.png', '.gif']))
                        <img src="{{ $media->url }}" alt="Imagen del jugador"
                             class="w-full h-36 object-cover rounded-lg shadow">
                    @elseif(Str::endsWith($media->url, ['.mp4', '.webm', '.ogg']))
                        <video controls class="w-full h-36 rounded-lg shadow object-cover">
                            <source src="{{ $media->url }}" type="video/{{ pathinfo($media->url, PATHINFO_EXTENSION) }}">
                            Tu navegador no soporta el video.
                        </video>
                    @endif
                @endforeach
            </div>
        </div>
    @endif

</div>