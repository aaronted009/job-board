<?php

namespace App\Livewire\Offers;

use Livewire\Component;
use App\Models\Offer;

class ListOffers extends Component
{
    public function render()
    {
        $offers = Offer::all();
        return view('livewire.offers.list-offers', [
            'offers' => $offers,
        ]);
    }
}
