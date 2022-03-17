<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketReacsieshow extends Component
{
    public $reacsie;

    public function mound()
    {
        $this->reacsie = $reacie;
    }
    public function render()
    {
        return view('livewire.ticket-reacsieshow');
    }
}
