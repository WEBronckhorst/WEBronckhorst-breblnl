<div class="w-full col-span-4 bg-white shadow-card rounded-xl">
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
                        <h3 class="py-0 my-0 text-lg font-semibold"><span class="pb-2">{{ $ticket->User->name }}</span> @admin <span class="inline-flex items-center px-3 mb-1 font-medium no-underline transition-all border border-solid border-deep-black/3 bg-grey-200 hover:border-deep-black/10 hover:bg-grey-300 mobile:flex mobile:items-center mobile:p-2 mobile:text-sm md:text-xs text-grey-800" style="border-radius: 12px; height: 24px;"> Beherder </span> @endadmin</h3>
                        <h3 class="py-0 my-0 text-lg underline text-blauw">{{ $ticket->User->Klant->naam }}</h3>
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
                </div>
            </div>

        </div>

    </div>
</div>
