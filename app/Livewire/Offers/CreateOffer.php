<?php

namespace App\Livewire\Offers;

use Livewire\Component;
use App\Models\Company;

class CreateOffer extends Component
{
    public Company $company;

    public function mount($id)
    {
        $this->company = Company::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.offers.create-offer');
    }
}
