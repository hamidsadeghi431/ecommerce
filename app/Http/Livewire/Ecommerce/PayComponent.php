<?php

namespace App\Http\Livewire\Ecommerce;

use Livewire\Component;

class PayComponent extends Component
{
    public function render()
    {
        return view('livewire.ecommerce.pay-component')->layout('layouts.base');
    }
}
