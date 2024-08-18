<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Company;

class DashboardCompany extends Component
{
    public Company $company;

    public function mount($id)
    {
        $this->company = Company::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.dashboard.dashboard-company');
    }
}
