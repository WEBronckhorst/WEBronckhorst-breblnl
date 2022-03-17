<?php use Carbon\Carbon; ?>
<x-app-layout>

    <x-slot name="header">
            {{ __('Dashboard') }}
    </x-slot>


    <div class="grid grid-flow-col grid-cols-4 gap-4 ">
        @livewire('ticket-show')
    </div>


</x-app-layout>
