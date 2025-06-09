<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\Suggestion;
use Illuminate\Support\Facades\Auth;

class MySuggestions extends Component
{
    public $suggestions;

    public function mount()
    {
        $this->suggestions = Suggestion::where('user_id', Auth::id())
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.my-suggestions');
    }
}

