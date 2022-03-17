<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class SetStarusTicket extends Component
{
    public $ticket;
    Public $status;
    public $popupOpen = false;

    public function mount($ticket)
    {
        $this->status = $ticket->state;
        # code...
    }

    public function setStatus()
    {
      //  dump($this->status);

        $ticketStatus = Ticket::find($this->ticket->id);
        $ticketStatus->state = $this->status;
        $ticketStatus->Save();
        $this->popupOpen = false;


        # code...
    }

    public function render()
    {

        return view('livewire.set-starus-ticket', ['status' => $this->ticket->state ]);
    }
}
