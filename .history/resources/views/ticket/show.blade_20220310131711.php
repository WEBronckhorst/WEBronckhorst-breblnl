<?php use Carbon\Carbon; ?>
<x-app-layout>

    <x-slot name="header">
            Ticket: #{{ $ticket->ticket_id }}, {{ $ticket->title }} van {{ $ticket->User()-name }}
    </x-slot>


    <div class="grid grid-flow-col grid-cols-4 gap-4 ">
        @livewire('ticket-show')
    </div>


</x-app-layout>
