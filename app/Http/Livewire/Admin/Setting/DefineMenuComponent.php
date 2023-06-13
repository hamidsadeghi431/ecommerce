<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\menu\menugrade1;
use Livewire\Component;

class DefineMenuComponent extends Component
{
    public function render()
    {
        $activemenu='definemenu';
        return view('livewire.admin.setting.define-menu-component')->layout('layouts.admin',get_defined_vars());
    }
}
