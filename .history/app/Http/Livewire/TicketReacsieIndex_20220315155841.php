<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;

    protected $listeners = ['NewReactie'];

    public function mount($ticket, $reacsies)
    {




    }
    public function NewReactie()
    {
        $this->reacsies = $ticket->reacsies;

    }



    public function render()
    {
        $reacsies = $this->ticket->reacsies->sortDesc();


        return view('livewire.ticket-reacsie-index', ['reacsies' => $reacsies]);
    }
}
