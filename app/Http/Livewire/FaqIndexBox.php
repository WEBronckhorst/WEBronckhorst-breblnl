<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FaqIndexBox extends Component
{
    public $faqs;

    public $open;

    protected $listeners = ['openFaq'];


    public function openFaq($id)
    {
        $this->open = $id;
    }


    public function render()
    {
        return view('livewire.faq-index-box');
    }
}
// yoneewinler
