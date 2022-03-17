<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SetStarusTicket extends Component
{
    Public $status;
    public $ticket;

    public function mound($ticket)
    {
        $this->starus = $this->ticket->state;

    }

    public function setStatus()
    {
        dump($this->status);
        # code...
    }

    public function render()
    {
        return view('livewire.set-starus-ticket');
    }
}
