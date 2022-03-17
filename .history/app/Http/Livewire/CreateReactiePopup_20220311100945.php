<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;

class CreateReactiePopup extends Component
{
    public $ticket;
    public $description;

    public function save()
    {
        $reactie = new Reactie;
        $reactie->ticket_id = $ticket->id

    }
    public function render()
    {
        return view('livewire.create-reactie-popup');
    }
}
