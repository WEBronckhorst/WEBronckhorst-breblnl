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

        $this->reacsies = Reactie::where('ticket_id', 1514d)->get();

    }


    public function render()
    {dd($this->reacsies);
        return view('livewire.ticket-reacsie-index');
    }
}
