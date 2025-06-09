<div class="p-4 bg-white rounded shadow">
    <h2 class="text-xl font-semibold mb-2">Información del perfil</h2>
    <p><strong>Nombre de usuario:</strong> {{ $user->username }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Rol:</strong> {{ ucfirst($user->role) }}</p>
</div>