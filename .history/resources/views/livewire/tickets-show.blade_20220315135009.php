<?php use Carbon\Carbon; ?>
<div class="">
    <li>
        <a href="{{ route('ticket.show', $ticket->id ?? '') }}" class="block no-underline hover:no-underline hover:bg-sky-50">
        <div class="flex items-center px-4 py-4 sm:px-6">
            <div class="flex items-center flex-1 min-w-0">
                <div class="flex justify-between flex-1 min-w-0">
                <div >
                <p class="flex justify-start space-x-2 text-lg font-semibold text-left text-stone-700 place-content-center" >
                    <span> {{ $ticket->title }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 mt-2 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <span class="pt-1 text-base font-normal text-gray-800 "><span class="font-bold ">ticket id:</span><span> #{{ $ticket->ticket_id }}</span></span>
                </p>
                <p class="flex items-center mt-2 text-sm text-gray-500">
                    <!-- Heroicon name: solid/mail -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="lex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                    </svg>
                    <span class="truncate">{{ $ticket->reacsies_count }}</span>
                </p>
                </div>
                <div class="hidden md:block">
                <div class="mr-5">
                    <p class="flex justify-end pr-2 space-x-1 text-sm text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    <time datetime="2020-01-07">{{ Carbon::create($ticket->created_at)->translatedFormat('d M y')  }}</time>
                    </p>
                    <div class="flex justify-end mt-2 text-sm text-gray-500 felx">
                    <!-- Heroicon name: solid/check-circle -->
                    <span class="mark_status_{{ $ticket->status->id ?? '' }}   " style="">
                        {{ $ticket->status->name ?? $ticket->state  }} </span>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div>
            <!-- Heroicon name: solid/chevron-right -->
            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
            </div>
        </div>
        </a>
    </li>
</div>
<div class="mark_status_5"></div>
