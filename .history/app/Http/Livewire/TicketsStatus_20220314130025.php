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

    ublic function setStatus($newStatus)
     {
         $this->status = $newStatus;
         $this->emit('queryStringUpdatedStatus', $this->status);

         // dd(Route::currentRouteName());

          if ($this->getPreviousRouteName() === 'idea.show') {
         return redirect()->route('idea.index', [
                 'status' => $this->status,
             ]);
          }
     }

    public function render()
    {
        return view('livewire.tickets-status');
    }
}
