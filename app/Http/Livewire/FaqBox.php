<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FaqBox extends Component
{
    public $faq;
    public $open;

    public function open($id)
    {
        $this->emit('openFaq', $id);
    }
    public function render()
    {
        return view('livewire.faq-box');
    }
}
