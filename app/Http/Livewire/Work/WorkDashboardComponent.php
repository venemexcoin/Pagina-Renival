<?php

namespace App\Http\Livewire\Work;

use Livewire\Component;

class WorkDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.work.work-dashboard-component')->layout('layouts.base1');
    }
}
