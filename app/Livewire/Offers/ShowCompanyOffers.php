<?php

namespace App\Livewire\Offers;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Company;
use App\Models\Offer;

class ShowCompanyOffers extends Component
{
    public Company $company;

    public function mount($id)
    {
        $this->company = Company::findOrFail($id);
    }

    #[Title('Mes offres')] 
    public function render()
    {
        $companyOffers = Offer::where('company_id', $this->company->id)->get();
        return view('livewire.offers.show-company-offers', [
            'companyOffers' => $companyOffers,
        ]);
    }
}
