<?php

namespace App\Http\Livewire\Ecommerce\Order;

use Livewire\Component;

class MainPageComponent extends Component
{
    public function render()
    {
        return view('livewire.ecommerce.order.main-page-component')->layout('layouts.base1');
    }
}
