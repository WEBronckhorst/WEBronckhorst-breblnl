<div class="relative w-full col-span-4 bg-white shadow-card rounded-xl">
    <div>
        <div class="flex justify-between px-5 py-5 space-x-3">
            <div class="flex justify-start space-x-3">
                <div class="">
                    <div class="w-20 h-20 overflow-hidden border rounded-md shadow-lg bg-slate-300">
                        <img src="{{ $ticket->User->getAvatar() }}" alt="">
                    </div>
                </div>
                <div class="flex flex-col font-interstate">
                    <div class="">
                        <h3 class="py-0 my-0 text-lg font-semibold"><span class="pb-2">{{ $ticket->User->name }}</span> @admin <span class="mark_licht" style="border-radius: 12px; height: 24px;"> Beherder </span> @endadmin</h3>
                        <h3 class="py-0 my-0 text-lg underline text-blauw">{{ $ticket->User->Klant->naam }}</h3>

                        <span class="px-3 py-2 mark_status_{{ $ticket->status->id ?? '' }} no-underline  " style="border-radius: 12px; height: 24px;">
                            {{ $ticket->status->name ?? $ticket->state  }} </span>
                        </div>

                    <article class="w-full px-4 py-4 mt-3 rounded-xl bg-slate-100">
                        <h2 class="text-xl font-extrabold font-interstate text-blauw">{{ $ticket->title }}</h2>
                        {!! $ticket->description !!}
                    </article>

                    <div class="flex flex-col w-2/3 px-2 py-3 mt-4 space-y-2 font-light border divide-y bg-slate-600 rounded-xl text-slate-300 ">
                        <div class="px-2 pt-2">
                            <div class="inline-block w-1/6 ">IP addres:</div>
                            <div class="inline-block w-4/6 font-base text-slate-100 font-mono45">{{ $ticket->ipaddress }}</div>
                        </div>
                        <div class="px-2 pt-2 ">
                            <div class="inline-block w-1/6 align-top">Device:</div>
                            <div class="inline-block w-4/6 font-base text-slate-100 font-mono45">{{ $ticket->device }}</div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0 flex justify-end px-4 py-4 space-x-4">

                        @livewire('set-starus-ticket', ['ticket' => $ticket])
                        @livewire('create-reactie-popup', ['ticket' => $ticket])
                    </div>
                </div>
                <div class="hidden mark_status_1"></div>
                <div class="hidden mark_status_2"></div>
                <div class="hidden mark_status_3"></div>
                <div class="hidden mark_status_4"></div>
            </div>

        </div>

    </div>
</div>
