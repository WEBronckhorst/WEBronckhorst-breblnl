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
        dd($this->ticket->id);
        $this->reacsies = Reactie::where('ticket_id', $this->ticket->id)->get();

    }


    public function render()
    {
        return view('livewire.ticket-reacsie-index');
    }
}
