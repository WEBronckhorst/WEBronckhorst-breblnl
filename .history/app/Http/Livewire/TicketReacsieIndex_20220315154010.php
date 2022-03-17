<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;
    public $reacsies;

    public function mound($reacsies)
    {
        $this->reacsies = $ticket->reacsies;


    }


    public function render()
    {

        return view('livewire.ticket-reacsie-index');
    }
}
