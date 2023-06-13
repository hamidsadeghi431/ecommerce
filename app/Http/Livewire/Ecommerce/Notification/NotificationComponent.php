<?php

namespace App\Http\Livewire\Ecommerce\Notification;

use Livewire\Component;

class NotificationComponent extends Component
{
    public function render()
    {
        return view('livewire.ecommerce.notification.notification-component')->layout('layouts.base');
    }
}
