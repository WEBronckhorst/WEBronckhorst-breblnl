<?php

namespace App\Http\Livewire;

use App\Models\Status;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class TicketsStatus extends Component
{
    public $statuses;
    public $statusCount;

    public function mount()
    {
        $this->statusCount = Status::getCount();
        $this->status = request()->status ?? "all";

        if (Route::currentRouteName() === 'ticket.show') {
            $this->status = null;
        }
    }

    public function setStatus($newStatus)
    {
        $this->statuses = $newStatus;
        $this->emit('queryStringUpdatedStatus', $this->status);

         // dd(Route::currentRouteName());

        if ($this->getPreviousRouteName() === 'ticket.show') {
            return redirect()->route('ticket.index', [
                'status' => $this->status,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.tickets-status');
    }
    public function getPreviousRouteName()
    {
        return app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
    }
}
