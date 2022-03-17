<?php use Carbon\Carbon; ?>
<x-app-layout>

    <x-slot name="header">
            Ticket: #{{ $ticket->ticket_id }}, {{ $ticket->title }} van {{ $ticket->User->name }}, {{$ticket->User->klant->title }
    </x-slot>

    @dump($ticket->User->klant)
    <div class="grid grid-flow-col grid-cols-4 gap-4 ">
        @livewire('ticket-show')
    </div>


</x-app-layout>
