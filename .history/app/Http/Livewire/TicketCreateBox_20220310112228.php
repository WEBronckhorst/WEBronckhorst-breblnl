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
        $ticket->title = $this->title;
        $ticket->description = $this->description;

        $ticket->save();
        $this->reset(['title', 'description']);

    }

    public function render()
    {
        return view('livewire.ticket-create-box');
    }
}
