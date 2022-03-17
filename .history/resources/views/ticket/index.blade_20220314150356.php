<?php use Carbon\Carbon; ?>
<x-app-layout>

    <x-slot name="header">
            Ticket ovezicht
    </x-slot>

    <div class="grid grid-flow-col grid-cols-4 gap-4 ">

    <div class="col-span-1 row-span-1 text-sm font-bold leading-6 text-center text-gray-500 rounded-lg bg-stripes-fuchsia">
            <!-- This example requires Tailwind CSS v2.0+ -->
            @livewire('tickets-status')


        </div>
    </div>
    <div class="col-span-3 row-span-3 pb-10 ">
        @livewire('tickets-index')
    </div>
</x-app-layout>


</x-app-layout>
