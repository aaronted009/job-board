<?php

namespace App\Livewire\Offers;

use Livewire\Component;
use App\Models\Offer;
use App\Models\Application;
use Livewire\Attributes\Title;

class ListOffers extends Component
{
    #[Title('Liste des offres')]
    public function render()
    {
        $offers = Offer::all();
        $applications = Application::all();
        return view('livewire.offers.list-offers', [
            'offers' => $offers,
            'applications' => $applications //We need to pass the applications to the view to know whether the user has already applied to an offer
        ]);
    }
}
