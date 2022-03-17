<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketReacsieshow extends Component
{
    public $reacsie;

    public function mound($reacsie)
    {
        $this->reacsie = $reacsie;
    }
    public function render()
    {
        return view('livewire.ticket-reacsieshow');
    }
}
