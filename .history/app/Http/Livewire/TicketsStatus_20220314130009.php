<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketsStatus extends Component
{
    public $status;
    public $statusCount;

    public function mount()
    {
        $this->statusCount = Status::getCount();
        $this->status = request()->status ?? "all";

        if (Route::currentRouteName() === 'ticket.show') {
            $this->status = null;
        }
    }

    public function render()
    {
        return view('livewire.tickets-status');
    }
}
