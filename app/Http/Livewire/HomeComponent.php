<?php

namespace App\Http\Livewire;

use App\Models\admin\parameters\initProperties;
use App\Models\admin\setting\sliders;
use App\Models\Brands;
use App\Models\product\products;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $brands=Brands::get();
        $products=products::with('productName')->where('trending',1)->get();
        $sliders=sliders::get();
        return view('livewire.home-component',get_defined_vars())->layout('layouts.base');
    }
}
