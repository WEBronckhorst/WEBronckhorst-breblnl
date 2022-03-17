<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;

    protected $listeners = ['newReactie'];

    public function mount($ticket)
    {
        $this->reacsies = $this->ticket->reacsies->sortDesc();

    }
    public function newReactie()
    {

        $this->resetPage();


    }



    public function render()
    {



        return view('livewire.ticket-reacsie-index');
    }
}
