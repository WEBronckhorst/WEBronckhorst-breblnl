<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;

class TicketsShow extends Component
{
    public $ticket;

    public function mount(ticket $ticket)
    {
        $this->ticket = $ticket;

    }
    public function render()
    {
        dump($this->ticket);
        return view('livewire.tickets-show');
    }
}
