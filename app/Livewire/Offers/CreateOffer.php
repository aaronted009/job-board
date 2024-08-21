<?php

namespace App\Livewire\Offers;

use Livewire\Component;
use App\Models\Company;
use Livewire\Attributes\Title;

class CreateOffer extends Component
{
    public Company $company;

    public function mount($id)
    {
        $this->company = Company::findOrFail($id);
    }

    #[Title('Créer une offre')] 
    public function render()
    {
        return view('livewire.offers.create-offer');
    }
}
