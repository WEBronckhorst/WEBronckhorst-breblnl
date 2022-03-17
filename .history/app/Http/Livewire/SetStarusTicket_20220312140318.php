<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SetStarusTicket extends Component
{
    Public $status;
    public $ticket;

    public function mound()
    {
        $this->starus = $ticket->state;

    }

    public function render()
    {
        return view('livewire.set-starus-ticket');
    }
}
