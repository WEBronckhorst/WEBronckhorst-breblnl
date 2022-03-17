<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketsIndex extends Component
{
    public $status = 'All';


    public function render()
    {
        return view('livewire.tickets-index');
    }
}
