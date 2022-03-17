<?php use Carbon\Carbon; ?>
<div>
    <div class="col-span-3 row-span-1 mb-6 bg-white rounded-lg shadow-card">
        <div class="overflow-hidden bg-white shadow sm:rounded-md">
            <div class="flex justify-between px-5 py-3 pt-5 space-x-2 border-b">
                <div class="text-2xl font-semibold text-blauw">Jou tickets</div>
                <div class="text-lg font-semibold text-gray-700 ">Totaal(22)</div>
                <div class="px-4 py-2 font-semibold text-white rounded-md text-md bg-blauw hover:bg-blauw-hover">Alle jou tickets</div>
            </div>
            <ul role="list" class="divide-y divide-gray-200">
                @forelse ($tickets as $ticket)
                <livewire:tickets-show
                :key="$idea->id"
                :idea="$idea"
                :votesCount="$idea->votes_count"
            />
                @empty
                xxx
                @endforelse
            </ul>
        </div>
</div>
