<?php

namespace App\Livewire;

use App\Models\Suggestion;
use Livewire\Component;

class SuggestionForm extends Component
{
    public $contact_name = '';
    public $contact_email = '';
    public $suggested_name = '';
    public $suggested_age = '';
    public $suggested_nationality = '';
    public $suggested_position = '';
    public $message = '';
    public $successMessage = '';

    protected $rules = [
        'contact_name' => 'required|string|max:255',
        'contact_email' => 'required|email|max:255',
        'suggested_name' => 'required|string|max:255',
        'suggested_age' => 'required|integer|min:10|max:50',
        'suggested_nationality' => 'required|string|max:255',
        'suggested_position' => 'required|string|max:255',
        'message' => 'nullable|string|max:1000',
    ];

    public function submit()
    {
        $this->validate();

        Suggestion::create([
            'user_id' => auth()->id(),
            'contact_name' => $this->contact_name,
            'contact_email' => $this->contact_email,
            'suggested_name' => $this->suggested_name,
            'suggested_age' => $this->suggested_age,
            'suggested_nationality' => $this->suggested_nationality,
            'suggested_position' => $this->suggested_position,
            'message' => $this->message,
        ]);

        $this->reset([
            'contact_name', 'contact_email', 'suggested_name',
            'suggested_age', 'suggested_nationality', 'suggested_position', 'message'
        ]);

        $this->successMessage = '¡Sugerencia enviada correctamente!';
    }

    public function render()
    {
        return view('livewire.suggestion-form');
    }
}
