<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        // Aquí podrías enviar el correo o guardar el mensaje

        // Guardar mensaje de éxito en sesión para mostrarlo en la vista
        session()->flash('success', 'Correo enviado correctamente');

        // Limpiar campos del formulario
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
