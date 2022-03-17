<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketCreateBox extends Component
{
    public $titel;
    public $description;

    public function render()
    {
        return view('livewire.ticket-create-box');
    }
}
