<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;
    public $reacsies;

    public function mound($reacies)
    {
        # code...
    }


    public function render()
    {
        return view('livewire.ticket-reacsie-index');
    }
}
