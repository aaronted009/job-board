<?php

namespace App\Livewire\Offers;

use Livewire\Component;
use App\Models\Offer;
use Livewire\Attributes\Title;

class ListOffers extends Component
{
    #[Title('Liste des offres')]
    public function render()
    {
        $offers = Offer::all();
        return view('livewire.offers.list-offers', [
            'offers' => $offers,
        ]);
    }
}
