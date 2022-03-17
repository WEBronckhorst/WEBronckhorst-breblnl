<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketReacsieshow extends Component
{
    public $nummer;

    public function mound()
    {
        $this->nummer = $nummer;
    }
    public function render()
    {
        return view('livewire.ticket-reacsieshow');
    }
}
