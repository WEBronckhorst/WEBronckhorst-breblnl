<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;
    public $reacsies;
    protected $listeners = ['NewReactie'];

    public function mound($ticket)
    {


        $this->reacsies = $this->ticket->reacsies;



    }
    public function NewReactie()
    {
        $this->reacsies = $ticket->reacsies;
        dd('x');
    }



    public function render()
    {
        dd($this->ticket);
        return view('livewire.ticket-reacsie-index');
    }
}
