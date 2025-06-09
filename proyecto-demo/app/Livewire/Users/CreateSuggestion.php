<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Suggestion;

class CreateSuggestion extends Component
{
    public $content;

    public function save()
    {
        $this->validate([
            'content' => 'required|min:5',
        ]);

        Suggestion::create([
            'content' => $this->content,
            'user_id' => Auth::id(),
        ]);

        $this->content = '';
        session()->flash('message', 'Sugerencia enviada correctamente.');
    }

    public function render()
    {
        return view('livewire.users.create-suggestion');
    }
}
