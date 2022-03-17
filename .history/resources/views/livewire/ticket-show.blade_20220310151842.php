<div class="w-full col-span-4 bg-white rounded-xl">
    <div>
        <div class="flex justify-between px-5 py-5 space-x-3">
            <div class="flex justify-start space-x-3">
                <div class="">
                    <div class="w-20 h-20 overflow-hidden border rounded-md shadow-lg bg-slate-300">
                        <img src="{{ $ticket->User->getAvatar() }}" alt="">
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="">
                        <h3 class="py-0 my-0 text-lg font-semibold">{{ $ticket->User->name }} @admin <a class="inline-flex items-center px-3 -mt-1 font-medium no-underline transition-all border border-solid border-deep-black/3 bg-grey-200 hover:border-deep-black/10 hover:bg-grey-300 mobile:flex mobile:items-center mobile:p-2 mobile:text-sm md:text-xs text-grey-800" title="Original Poster" style="border-radius: 12px; height: 24px;"> Beherder </a> @endadmin</h3>
                        <h3 class="py-0 my-0 text-lg underline text-blauw">{{ $ticket->User->Klant->naam }}</h3>
                    </div>

                    <article class="w-full px-3 py-4 mt-3 border rounded-xl bg-slate-50">
                        <h2 class="text-xl font-semibold text-blauw">{{ $ticket->title }}</h2>
                        {!! $ticket->description !!}
                    </article>
                </div>
            </div>

        </div>

    </div>
</div>
