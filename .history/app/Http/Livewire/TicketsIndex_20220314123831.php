<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketsIndex extends Component
{
    public $status = 'All';

    protected $queryString = [
        'status',
    ];

    public function mount()
    {
        $this->status = request()->status ?? "All";
    }

    public function queryStringUpdatedStatus($newStatus)
    {
        $this->status = $newStatus;
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.tickets-index');
    }
}
