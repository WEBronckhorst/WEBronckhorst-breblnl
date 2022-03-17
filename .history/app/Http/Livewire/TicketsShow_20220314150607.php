<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TicketsShow extends Component
{
    public $ticket;

    public function mount(ticket $ticket)
    {
        $this->idea = $idea;
        $this->votesCount = $votesCount;
        $this->hasVoted = $idea->isVotedByUser(auth()->user());
    }
    public function render()
    {
        return view('livewire.tickets-show');
    }
}
