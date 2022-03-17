<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;


    public function mound()
    {



    }


    public function render()
    {

        return view('livewire.ticket-reacsie-index', ['reacties' => Reactie::WHERE('ticket_id', 514)->get()]);
    }
}
