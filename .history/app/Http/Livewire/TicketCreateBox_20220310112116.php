<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class TicketCreateBox extends Component
{
    public $title;
    public $description;

    public function save()
    {
        dd($this);
        $ticket = new Ticket;
        $ticket->name = $this->name;

        $ticket->save();

    }

    public function render()
    {
        return view('livewire.ticket-create-box');
    }
}
