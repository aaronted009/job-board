<?php

namespace App\Livewire\Register;

use Livewire\Component;
use Livewire\Attributes\Title;

class Register extends Component
{
    #[Title('S\'enregistrer')] 
    public function render()
    {
        return view('livewire.register.register');
    }
}
