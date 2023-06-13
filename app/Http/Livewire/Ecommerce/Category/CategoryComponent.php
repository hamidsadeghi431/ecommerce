<?php

namespace App\Http\Livewire\Ecommerce\Category;

use App\Models\admin\parameters\definProperties;
use App\Models\admin\parameters\initProperties;
use App\Models\categories;
use Livewire\Component;

class CategoryComponent extends Component
{
    public function render()
    {
        $categories=categories::get();
        return view('livewire.ecommerce.category.category-component',get_defined_vars())->layout('layouts.base');
    }
}
