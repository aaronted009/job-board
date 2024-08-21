<?php

namespace App\Livewire\Register;

use Livewire\Component;
use Livewire\Attributes\Title;

class RegisterCompany extends Component
{
    #[Title('Enregistrer une société')] 
    public function render()
    {
        return view('livewire.register.register-company');
    }
}
