<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $name;
    public $email;
    public $editMode = false; // Para controlar si está en modo edición

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function toggleEdit()
    {
        $this->editMode = !$this->editMode;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = Auth::user();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        $this->editMode = false;
        session()->flash('message', 'Perfil actualizado con éxito.');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
