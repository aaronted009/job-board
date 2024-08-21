<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Title;

class DashboardUser extends Component
{
    #[Title('Tableau de bord')] 
    public function render()
    {
        return view('livewire.dashboard.dashboard-user');
    }
}
