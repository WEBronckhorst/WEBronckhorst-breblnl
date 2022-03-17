<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketShow extends Component
{
    public $ticket;

    public function mound()
    {
        # code...
    }
    public function render()
    {
        return view('livewire.ticket-show');
    }
}
