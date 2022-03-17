<?php

namespace App\Http\Livewire;

use App\Models\Reactie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateReactiePopup extends Component
{
    public $title;
    public $description;
    public $showSucses = false;
    public $ticket_id;


    public function save()
    {

        dd($this);
        $reactie = new Reactie;


        $reactie->ticket_id = $this->ticket->id;

            $reactie->user_id = Auth::id();


        $reactie->description = $this->description;
        $reactie->save();

       // $this->popupOpen = false;
       // return ['status' => 'NiuewStaus'];




    }
    public function render()
    {
        return view('livewire.create-reactie-popup', ['users' => User::get()]);
    }
}
