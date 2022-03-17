<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateReactiePopup extends Component
{
    public $ticket;
    public $description;

    public function save()
    {

    }
    public function render()
    {
        return view('livewire.create-reactie-popup');
    }
}
