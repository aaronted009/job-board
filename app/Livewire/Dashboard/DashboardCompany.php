<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Company;
use Livewire\Attributes\Title;

class DashboardCompany extends Component
{
    public Company $company;

    public function mount($id)
    {
        $this->company = Company::findOrFail($id);
    }

    #[Title('Tableau de bord')] 
    public function render()
    {
        return view('livewire.dashboard.dashboard-company');
    }
}
