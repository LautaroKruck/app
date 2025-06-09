<div>
    <table class="table-auto w-full border-collapse">
        <thead>
            <tr>
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Título</th>
                <th class="px-4 py-2 border">Descripción</th>
                <th class="px-4 py-2 border">Fecha</th>
                <th class="px-4 py-2 border">Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($suggestions as $suggestion)
                <tr>
                    <td class="px-4 py-2 border">{{ $suggestion->id }}</td>
                    <td class="px-4 py-2 border">{{ $suggestion->title }}</td>
                    <td class="px-4 py-2 border">{{ Str::limit($suggestion->description, 50) }}</td>
                    <td class="px-4 py-2 border">{{ $suggestion->created_at->format('d/m/Y') }}</td>
                    <td class="px-4 py-2 border">{{ $suggestion->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-2 border text-center">No hay propuestas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
