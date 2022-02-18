
<div class="mb-4 text-sm leading-6 text-gray-500 rounded-lg bg-stripes-fuchsia">
    <div class="row-span-2 overflow-hidden bg-white rounded-lg shadow-card">
        <input type="search" name="" id="" placeholder="Snel zoeken?" class="w-full px-10 py-6 font-bold border-0 text-slate-800 placeholder:text-blauw placeholder:font-semibold">
    </div>
</div>
<div class="text-sm leading-6 text-gray-500 rounded-lg bg-stripes-fuchsia">
    <div class="row-span-2 overflow-hidden bg-white rounded-lg shadow-card">
        <div class="">

            @foreach ($faqs as $faq)
                @livewire('faq-box', ['faq' => $faq, 'open' => $open])
            @endforeach
        </div>
    </div>
</div>
