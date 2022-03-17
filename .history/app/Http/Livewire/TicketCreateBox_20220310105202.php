<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketCreateBox extends Component
{
    public $title;
    public $description = "";

    public function submit()
    {
        // Process form data, save to the database, etc.

		// Emit the reinit event after you've done processing the form
        $this->emit('reinit');
    }

    public function render()
    {
        return view('livewire.ticket-create-box');
    }
}
