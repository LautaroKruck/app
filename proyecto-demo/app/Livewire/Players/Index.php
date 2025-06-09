<?php

namespace App\Livewire\Players;

use Livewire\Component;
use App\Models\Player;
use App\Models\Position;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $filterPosition = '';
    public $positions = [];

    public function mount()
    {
        $this->positions = Position::all();
    }

    public function updating($property)
    {
        if (in_array($property, ['search', 'filterPosition'])) {
            $this->resetPage();
        }
    }

    public function render()
    {
        $query = Player::with('position');

        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->filterPosition) {
            $query->where('position_id', $this->filterPosition);
        }

        return view('livewire.players.index', [
            'players' => $query->paginate(9),
        ]);
    }
}
