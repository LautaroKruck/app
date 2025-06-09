<div>
    <div class="container mx-auto p-4">
        <div class="mb-4 flex flex-col md:flex-row md:justify-between md:items-center gap-2">
            <div class="flex gap-2">
                <input
                    type="text"
                    wire:model="search"
                    placeholder="Buscar usuarios..."
                    class="border rounded px-3 py-2 w-full md:w-64"
                />
                <select wire:model="roleFilter" class="border rounded px-3 py-2">
                    <option value="">Todos los roles</option>
                    <option value="admin">Admins</option>
                    <option value="user">Users</option>
                </select>
                <select wire:model="banFilter" class="border rounded px-3 py-2">
                    <option value="">Todos</option>
                    <option value="banned">Baneados</option>
                    <option value="active">Activos</option>
                </select>
            </div>
            <span class="text-gray-600">Total: {{ $users->total() }}</span>
        </div>

        <table class="min-w-full bg-white border">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Rol</th>
                    <th class="py-2 px-4 border-b">Estado</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr class="@if($user->banned) bg-red-100 @endif">
                        <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b">
                            @if($user->is_admin)
                                <span class="text-green-600 font-semibold">Admin</span>
                            @else
                                <span class="text-gray-700">User</span>
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b">
                            @if($user->banned)
                                <span class="text-red-600 font-semibold">Baneado</span>
                            @else
                                <span class="text-green-600">Activo</span>
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b flex gap-2">
                            @if(!$user->is_admin)
                                <button wire:click="makeAdmin({{ $user->id }})" class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 rounded text-xs">Conceder Admin</button>
                            @else
                                <button wire:click="removeAdmin({{ $user->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white px-2 py-1 rounded text-xs">Degradar a User</button>
                            @endif

                            @if(!$user->banned)
                                <button wire:click="banUser({{ $user->id }})" class="bg-red-500 hover:bg-red-700 text-white px-2 py-1 rounded text-xs">Banear</button>
                            @else
                                <button wire:click="unbanUser({{ $user->id }})" class="bg-green-500 hover:bg-green-700 text-white px-2 py-1 rounded text-xs">Desbanear</button>
                            @endif

                            <button wire:click="deleteUser({{ $user->id }})" class="bg-gray-500 hover:bg-gray-700 text-white px-2 py-1 rounded text-xs">Eliminar</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-4 text-center text-gray-500">No se encontraron usuarios.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
</div>
