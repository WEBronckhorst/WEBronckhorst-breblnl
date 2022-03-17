<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateReactiePopup extends Component
{
    public $ticket;
    public $description;

    public function save()
    {
        $reactie = new Reactie;
        $reactie->ticket_id = $this->ticket->id;
        $reactie->user_id = Auth::id();



    }
    public function render()
    {
        return view('livewire.create-reactie-popup');
    }
}
