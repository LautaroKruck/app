<?php

namespace App\Livewire\Users;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Delete extends Component
{
    public function delete()
    {
        $user = Auth::user();
        Auth::logout();
        $user->delete();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.users.delete');
    }
}