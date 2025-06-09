<div class="p-6 bg-white rounded-lg shadow space-y-4">
    <h2 class="text-2xl font-bold text-gray-800 border-b pb-2">Mis sugerencias</h2>

    @forelse ($suggestions as $suggestion)
        <div class="border rounded-lg p-4 bg-gray-50 hover:bg-gray-100 transition">
            <h3 class="text-lg font-semibold text-gray-700 mb-1">{{ $suggestion->title }}</h3>
            <p class="text-gray-600">{{ $suggestion->message }}</p>
            <p class="text-sm text-gray-400 mt-2">{{ $suggestion->created_at->format('d M Y, H:i') }}</p>
        </div>
    @empty
        <p class="text-gray-500 italic">No tienes sugerencias aún.</p>
    @endforelse
</div>
