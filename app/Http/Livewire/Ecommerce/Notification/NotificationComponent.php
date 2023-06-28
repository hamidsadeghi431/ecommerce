<?php

namespace App\Http\Livewire\Ecommerce\Notification;

use App\Models\purchase;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationComponent extends Component
{
    public function render()
    {
        $OrderData=purchase::where('userId',Auth::user()->id)->get();
        return view('livewire.ecommerce.notification.notification-component',get_defined_vars())->layout('layouts.base');
    }
}
