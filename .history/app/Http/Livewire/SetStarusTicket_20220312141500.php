<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SetStarusTicket extends Component
{
    public $ticket;
    Public $status;

    public function mount(Type $var = null)
    {
        # code...
    }

    public function setStatus()
    {
        dump($this->status);
        # code...
    }

    public function render()
    {

        return view('livewire.set-starus-ticket', ['status' => $this->ticket->state ]);
    }
}
