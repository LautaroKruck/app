<?php

namespace App\Livewire\Users;

use Livewire\Component;

class Layout extends Component
{
    public $tab = 'show';

    public function selectTab($tab)
    {
        $this->tab = $tab;
    }

    public function render()
    {
        return view('livewire.users.layout');
    }
}

