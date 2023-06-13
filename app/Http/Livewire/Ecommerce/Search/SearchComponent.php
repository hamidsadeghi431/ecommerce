<?php

namespace App\Http\Livewire\Ecommerce\Search;

use Livewire\Component;

class SearchComponent extends Component
{
    public function render()
    {
        return view('livewire.ecommerce.search.search-component')->layout('layouts.base');
    }
}
