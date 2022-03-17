<?php use Carbon\Carbon; ?>
<x-app-layout>

    <x-slot name="header">
            Ticket ovezicht
    </x-slot>


    <div class="col-span-1 row-span-1 text-sm font-bold leading-6 text-center text-gray-500 rounded-lg bg-stripes-fuchsia">
        <div class="row-span-2 bg-white rounded-lg shadow-card">
            <div class="flex justify-between px-5 py-5 mb-1 space-x-2 border-b">
                <div class="text-2xl font-semibold text-blauw">FAQ</div>
                <div class="mt-1">
                    <a href="{{ route('faq.create') }}" class="px-4 py-2 mt-5 font-semibold text-white rounded-md text-md bg-blauw hover:bg-blauw-hover"> Nieuwe FAQ </a>
                </div>
            </div>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <nav class="px-4 py-5 space-y-2" aria-label="Sidebar">
                <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">

                    <x-vertical-navigation-link herf="#" :active="true"> Alles</x-vertical-navigation-link>
                @foreach ($statuss as $status, $id)
                <x-vertical-navigation-link herf="#" :active="false"> {{ $status }} </x-vertical-navigation-link>
                @endforeach

            </nav>


        </div>
    </div>
    <div class="col-span-3 row-span-3 pb-10 ">

    </div>



</x-app-layout>
