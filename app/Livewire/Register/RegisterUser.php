<?php

namespace App\Livewire\Register;

use Livewire\Component;
use Livewire\Attributes\Title;

class RegisterUser extends Component
{
    #[Title('Enregistrer un utilisateur')] 
    public function render()
    {
        return view('livewire.register.register-user');
    }
}
