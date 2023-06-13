<?php

namespace App\Http\Livewire\Ecommerce\Favourite;

use Livewire\Component;

class FavouriteComponent extends Component
{
    public function render()
    {
        return view('livewire.ecommerce.favourite.favourite-component')->layout('layouts.base');
    }
}
