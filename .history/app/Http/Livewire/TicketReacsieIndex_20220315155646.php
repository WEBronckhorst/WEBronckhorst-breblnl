<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;
    public $reacsies;
    protected $listeners = ['NewReactie'];

    public function mound($ticket, $reacsies)
    {




    }
    public function NewReactie()
    {
        $this->reacsies = $ticket->reacsies;

    }



    public function render()
    {
        $reacsies = $this->ticket->reacsies;
        dump($reacsies);

        return view('livewire.ticket-reacsie-index', ['reacsies' => $this->ticket->reacsies]);
    }
}