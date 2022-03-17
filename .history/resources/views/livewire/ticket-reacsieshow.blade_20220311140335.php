<div>
    <div class="w-full col-span-4 bg-white rounded-xl shadow-card border-1 border-slate-400  @if($reacsie->User->isAdmin()) border-blauw @endif ">
        <div>
            <div class="flex justify-between px-5 py-5 space-x-3">
                <div class="flex justify-start space-x-3">
                    <div class="">
                        <div class="w-20 h-20 overflow-hidden border rounded-md shadow-lg bg-slate-300">
                            <img src="{{ $reacsie->User->getAvatar() }}" alt="">
                        </div>
                    </div>
                    <div class="flex flex-col flex-1 w-full">
                        <div class="">
                            <h3 class="py-0 my-0 text-lg font-semibold"><span class="pb-2">{{ $reacsie->User->name }}</span>@if($reacsie->User->isAdmin()) <span class="inline-flex items-center px-3 mb-1 font-medium no-underline transition-all border border-solid border-deep-black/3 bg-grey-200 hover:border-deep-black/10 hover:bg-grey-300 mobile:flex mobile:items-center mobile:p-2 mobile:text-sm md:text-xs text-grey-800" style="border-radius: 12px; height: 24px;"> Beherder </span> @endif</h3>
                            <h3 class="py-0 my-0 text-lg underline text-blauw">{{ $reacsie->User->Klant->naam }}</h3>
                        </div>

                        <article class="block w-full px-4 py-2 mt-3 rounded-tl-none rounded-xl bg-slate-100">
                            {!! $reacsie->description !!}
                        </article>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>