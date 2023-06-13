<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\admin\setting\ManageSeo;
use Livewire\Component;

class SeoComponent extends Component
{
    protected $listeners=[
        'refreshParent'=>'$refresh'
    ];

    public function selectItem($id)
    {
        $this->emit('getModalId',$id);
        $this->dispatchBrowserEvent('show-form');
    }
    public function render()
    {
        $tableMain=ManageSeo::get();
        return view('livewire.admin.setting.seo-component',get_defined_vars())->layout('layouts.admin');
    }
}
