<div>
    {{-- Menú de pestañas --}}
    <nav class="mb-4 flex space-x-2">
        <button wire:click="selectTab('show')" class="btn">Perfil</button>
        <button wire:click="selectTab('edit')" class="btn">Editar</button>
        <button wire:click="selectTab('suggestions')" class="btn">Mis sugerencias</button>
        <button wire:click="selectTab('create-suggestion')" class="btn">Nueva sugerencia</button>
        <button wire:click="selectTab('delete')" class="btn text-red-600">Eliminar cuenta</button>
    </nav>

    {{-- Componente dinámico según la pestaña --}}
    <div>
        @if ($tab === 'show')
            @livewire('users.show')
        @elseif ($tab === 'edit')
            @livewire('users.edit')
        @elseif ($tab === 'suggestions')
            @livewire('users.suggestions')
        @elseif ($tab === 'create-suggestion')
            @livewire('users.create-suggestion')
        @elseif ($tab === 'delete')
            @livewire('users.delete')
        @endif
    </div>
</div>
