<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class TicketReacsieIndex extends Component
{
    public $ticket;
    public $reacsies;

    public function mound()
    {
        $this->reacsies = $reacies


    }


    public function render()
    {

        return view('livewire.ticket-reacsie-index');
    }
}
