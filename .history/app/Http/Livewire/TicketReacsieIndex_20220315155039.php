<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;

    protected $listeners = ['NewReactie'];

    public function mound()
    {
        dd($this);





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
