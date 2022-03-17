<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketShow extends Component
{
    public $ticket;
    public $statuss;

    public function mount()
    {
        $this->ticket = $ticket;
    }
    public function render()
    {
        return view('livewire.ticket-show');
    }
}
