<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class CalendaryComponent extends Component
{
    public function render()
    {
        return view('livewire.user.calendary-component')->layout('layouts.base1');
    }
}
