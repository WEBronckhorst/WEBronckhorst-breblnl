<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\Klant;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $tickets = Ticket::where('user_id', Auth::user()->id)->take(7)->get();
        $klant = Klant::where('user_id', Auth::user()->id)->first();
        $faqs = FAQ::take(3)->get();
        return view('dashboard', ['tickets' => $tickets, 'faqs'=>$faqs, 'klant' => $klant]);
    }
}
