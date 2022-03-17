<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use Livewire\Component;
use Livewire\WithPagination;

class TicketReacsieIndex extends Component
{

    use WithPagination;
    public $ticket;

    protected $listeners = ['newReactie'];

    public function mount($ticket)
    {
        $this->reacsies = $this->ticket->reacsies->sortDesc();

    }
    public function newReactie()
    {

        $this->resetPage();


    }



    public function render()
    {



        return view('livewire.ticket-reacsie-index');
    }
}
