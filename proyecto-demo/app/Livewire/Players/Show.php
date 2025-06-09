<?php

namespace App\Livewire\Players;

use Livewire\Component;
use App\Models\Player;

class Show extends Component
{
    public Player $player;

    public function mount($player)
    {
        $this->player = Player::with('position')->findOrFail($player);
    }

    public function render()
    {
        return view('livewire.players.show');
    }
}

