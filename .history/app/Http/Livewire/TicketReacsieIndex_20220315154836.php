<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;
    public $reacsies;
    protected $listeners = ['NewReactie'];

    public function mound($reacsies)
    {

        $this->reacsies = $ticket->reacsies>sortDesc('id');



    }
    public function NewReactie()
    {
        $this->reacsies = $ticket->reacsies;
        dd('x');
    }


    public function render()
    {

        return view('livewire.ticket-reacsie-index');
    }
}
