<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketCreateBox extends Component
{
    public $title;
    public $description;

    public function save()
    {
        dd($title;);
    }

    public function render()
    {
        return view('livewire.ticket-create-box');
    }
}
