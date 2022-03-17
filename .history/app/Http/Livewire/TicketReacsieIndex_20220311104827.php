<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;
    public $reacsies;

    public function mound($reacies)
    {



    }


    public function render()
    {
        dump($this->reacsies = Reactie::WHERE('ticket_id', 514)->get());
        return view('livewire.ticket-reacsie-index');
    }
}
