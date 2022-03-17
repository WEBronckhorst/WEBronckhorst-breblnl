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
        $statuses = [
            1 => 'Open',
            2 => 'In behandeling',
            3 => 'Afgerond',
            4 => 'Geannuleerd',
        ];
        return view('livewire.tickets-index',
            [
                'ideas' => Idea::with('user', 'category', 'status')
                ->when($this->status && $this->status !== 'All', function ($query) use ($statuses) {
                return $query->where('status_id', $statuses->get($this->status));
            })
                ->when($this->category && $this->category !== 'All Categorys', function ($query) use ($categories) {
                return $query->where('category_id', $categories->pluck('id','name')->get($this->category ));
            })
                ->when($this->Filter && $this->Filter === 'Top Voted', function ($query) {
                return $query->orderByDesc('votes_count');
            })
            ->when($this->Filter && $this->Filter === 'My Ideas', function ($query) {
                return $query->where('user_id', auth()->id() );
            })
            ->when($this->Filter && $this->Filter === 'Spam Ideas', function ($query) {
                return $query->where('spam_reports', '>', 0 )->orderByDesc('spam_reports');
            })
            ->when(strlen($this->search) >= 3, function ($query) {
                return $query->where('title', 'like',  "%".$this->search."%" );
            })
                ->addSelect(['voted_by_user' => Vote::select('id')
                        ->where('user_id', auth()->id())
                        ->whereColumn('idea_id', 'ideas.id')
                    ])
                    ->withCount('votes')
                    ->withCount('comments')
                    ->orderBy('id', 'desc')
                    ->simplePaginate(Idea::PAGINATION_COUNT),
                    'categories' => $categories,
            ]);
    }
}
