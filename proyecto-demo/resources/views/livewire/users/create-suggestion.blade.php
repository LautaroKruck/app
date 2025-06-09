<div class="p-4 bg-white rounded shadow space-y-4">
    <div>
        <form wire:submit.prevent="submit">
            <h3>Datos del Jugador</h3>
            <div>
                <label for="player_name">Nombre del Jugador:</label>
                <input type="text" id="player_name" wire:model="player_name" required>
            </div>
            <div>
                <label for="player_age">Edad:</label>
                <input type="number" id="player_age" wire:model="player_age" required>
            </div>
            <div>
                <label for="player_position">Posición:</label>
                <input type="text" id="player_position" wire:model="player_position" required>
            </div>
            <div>
                <label for="player_images">Imágenes del Jugador:</label>
                <input type="file" id="player_images" wire:model="player_images" multiple accept="image/*">
            </div>
            <div>
                <label for="player_videos">Videos del Jugador:</label>
                <input type="file" id="player_videos" wire:model="player_videos" multiple accept="video/*">
            </div>
            <div>
                <label for="player_description">Descripción:</label>
                <textarea id="player_description" wire:model="player_description"></textarea>
            </div>

            <h3>Datos del Manager/Contacto</h3>
            <div>
                <label for="manager_name">Nombre del Manager:</label>
                <input type="text" id="manager_name" wire:model="manager_name" required>
            </div>
            <div>
                <label for="manager_email">Email:</label>
                <input type="email" id="manager_email" wire:model="manager_email" required>
            </div>
            <div>
                <label for="manager_phone">Número de Teléfono:</label>
                <input type="tel" id="manager_phone" wire:model="manager_phone" required>
            </div>
            <div>
                <label for="manager_notes">Notas adicionales:</label>
                <textarea id="manager_notes" wire:model="manager_notes"></textarea>
            </div>

            <button type="submit">Enviar Sugerencia</button>
        </form>
    </div>

    @if (session()->has('message'))
        <p class="text-green-600">{{ session('message') }}</p>
    @endif
</div>
