<?php

namespace App\Http\Livewire;

use App\Models\Status;
use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;

class TicketsIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $status = 'All';

    protected $queryString = [
        'status',
    ];
    protected $listeners = ['queryStringUpdatedStatus'];

    public function mount()
    {
        $this->status = request()->status ?? "All";
    }

    public function queryStringUpdatedStatus($newStatus)
    {
        $this->status = $newStatus;
        dd($this->status);
        $this->resetPage();
    }
    function render()
    {

        $statuses = Status::all()->pluck('id', 'name');
        return view('livewire.tickets-index',
            [
                'tickets' => Ticket::with('user', 'status')
                    ->when($this->status && $this->status !== 'All', function ($query) use ($statuses) {
                        return $query->where('state', $statuses->get($this->status));
                })
                ->orderBy('id', 'desc')
                ->paginate(Ticket::PAGINATION_COUNT),
                'statuses' => $statuses,
            ]);
    }
}
