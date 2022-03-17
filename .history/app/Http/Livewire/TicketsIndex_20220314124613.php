<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
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
        $statuses = [
            1 => 'Open',
            2 => 'In behandeling',
            3 => 'Afgerond',
            4 => 'Geannuleerd',
        ];
        return view('livewire.tickets-index',
            [
                'tickets' => Ticket::with('user', 'state')
                    ->when($this->status && $this->status !== 'All', function ($query) use ($statuses) {
                    return $query->where('state', $statuses->get($this->status));
                })
                    ->orderBy('id', 'desc')
                    ->simplePaginate(Ticket::PAGINATION_COUNT),
                    'statuses' => $statuses,
            ]);
    }
}
