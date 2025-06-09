<div>
    <div class="player-detail flex flex-col md:flex-row bg-white rounded shadow p-6">
        <!-- Player Photo -->
        <div class="md:w-1/3 flex justify-center items-start">
            <img src="{{ $player->photo_url ?? asset('images/default-player.png') }}" alt="Foto del jugador" class="w-48 h-48 object-cover rounded-full border-2 border-gray-300">
        </div>
        <!-- Player Info -->
        <div class="md:w-2/3 md:pl-8 mt-6 md:mt-0">
            <h2 class="text-2xl font-bold mb-2">{{ $player->name }}</h2>
            <p class="text-gray-600 mb-1"><strong>Edad:</strong> {{ $player->age }}</p>
            <p class="text-gray-600 mb-1"><strong>Posición:</strong> {{ $player->position }}</p>
            <p class="text-gray-600 mb-1"><strong>Nacionalidad:</strong> {{ $player->nationality }}</p>
            <p class="text-gray-600 mb-1"><strong>Equipo:</strong> {{ $player->team }}</p>
            <p class="text-gray-700 mt-4">{{ $player->bio }}</p>
        </div>
    </div>

    <!-- Galería de Imágenes y Videos -->
    <div class="mt-8">
        <h3 class="text-xl font-semibold mb-4">Galería</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($player->gallery as $media)
                @if(Str::endsWith($media->url, ['.jpg', '.jpeg', '.png', '.gif']))
                    <div>
                        <img src="{{ $media->url }}" alt="Imagen de galería" class="w-full h-32 object-cover rounded shadow">
                    </div>
                @elseif(Str::endsWith($media->url, ['.mp4', '.webm', '.ogg']))
                    <div>
                        <video controls class="w-full h-32 rounded shadow">
                            <source src="{{ $media->url }}" type="video/{{ pathinfo($media->url, PATHINFO_EXTENSION) }}">
                            Tu navegador no soporta el video.
                        </video>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
