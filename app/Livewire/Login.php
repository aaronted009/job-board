<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Login extends Component
{
    #[Validate('required')]
    public $email = '';
    #[Validate('required')]
    public $password = '';

    public function render()
    {
        return view('livewire.login');
    }

    #[Title('Se connecter')]
    public function login()
    {
        $this->validate();

        
        $user = DB::table('users')
            ->where('email', $this->email)
            ->first();
        
        $company = DB::table('companies')
            ->where('email', $this->email)
            ->where('password', $this->password)
            ->first();

        if ($user and Hash::check($this->password, $user->password)) {
            session()->flash('success', 'Vous êtes connecté.');
            return redirect()->route('home');
        } else if ($company) {
            session()->flash('success', 'Vous êtes connecté.');
            return redirect()->route('dashboard.company', ['id' => $company->id]);
        } else {
            session()->flash('error', 'Email ou mot de passe incorrect.');
            return redirect()->route('login');
        }
    }
}
