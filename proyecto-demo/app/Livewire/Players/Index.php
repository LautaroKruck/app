<?php

namespace App\Livewire\Players;

use Livewire\Component;
use App\Models\Player;
use App\Models\Position;

class Index extends Component
{
    public $search = '';
    public $filterPosition = '';

    public $positions = [];

    public function mount()
    {
        // Cargamos las posiciones desde la base de datos
        $this->positions = Position::all();
    }

    public function render()
    {
        // Consulta base
        $query = Player::with('position');

        // Filtro por nombre
        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        // Filtro por posición
        if ($this->filterPosition) {
            $query->where('position_id', $this->filterPosition);
        }

        $players = $query->get();

        return view('livewire.players.index', [
            'players' => $players,
        ]);
    }
}
