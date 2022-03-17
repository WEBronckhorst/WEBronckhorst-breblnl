<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketsShow extends Component
{
    public $ticket;

    public function mount(ticket $ticket)
    {
        $this->ticket = $ticket;

    }
    public function render()
    {
        return view('livewire.tickets-show');
    }
}
