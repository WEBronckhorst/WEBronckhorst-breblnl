<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketReacsieshow extends Component
{
    public $id;

    public function mound()
    {
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.ticket-reacsieshow');
    }
}
