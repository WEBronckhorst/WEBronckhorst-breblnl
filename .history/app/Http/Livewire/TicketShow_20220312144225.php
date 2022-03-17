<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketShow extends Component
{
    public $ticket;
    public $statuss;

    public function mount($statuss)
    {
        $this->statuss = [1 => 'Open']
        $this->ticket = $ticket;
    }
    public function render()
    {
        return view('livewire.ticket-show');
    }
}
