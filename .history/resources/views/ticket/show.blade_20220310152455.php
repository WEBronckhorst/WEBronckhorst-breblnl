<?php use Carbon\Carbon; ?>
<x-app-layout>

    <x-slot name="header">
            Ticket: #{{ $ticket->ticket_id }}, {{ $ticket->title }} van {{ $ticket->User->name }}, {{$ticket->User->Klant->naam }}
    </x-slot>


    <div class="grid grid-flow-col grid-cols-4 gap-4 ">
        @livewire('ticket-show', ['ticket' => $ticket])
    </div>
    <div class="">
        @livewire('ticket-reacsie-index')
    </div>



</x-app-layout>
