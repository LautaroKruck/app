<?php
namespace App\Livewire\Users;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{
    public $username;
    public $email;

    public function mount()
    {
        $this->username = Auth::user()->username;
        $this->email = Auth::user()->email;
    }

    public function save()
    {
        $user = Auth::user();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->save();

        session()->flash('message', 'Perfil actualizado correctamente.');
    }

    public function render()
    {
        return view('livewire.users.edit');
    }
}
