<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TicketCreateBox extends Component
{
    public $title;
    public $description;
    public $showSucses = false;
    public $ticket_id;

    public function save()
    {
       // dd($this);
        $ticket = new Ticket;
        $ticket->user_id = Auth::id();
        $ticket->ticket_id = str_pad( Auth::id(), 3, '0', STR_PAD_RIGHT).date("ymdhi");
        $ticket->title = $this->title;
        $ticket->description = $this->description;

        $ticket->save();
        $this->ticket_id =  $ticket->id;
        $this->showSucses = true;
    }

    public function render()
    {
        return view('livewire.ticket-create-box');
    }
}
