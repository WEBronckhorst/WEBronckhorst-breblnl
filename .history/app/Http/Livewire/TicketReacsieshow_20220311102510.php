<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketReacsieshow extends Component
{
    public $reacie;

    public function mound($reacie)
    {
        $this->reacsie = $reacie;
    }
    public function render()
    {
        return view('livewire.ticket-reacsieshow');
    }
}
