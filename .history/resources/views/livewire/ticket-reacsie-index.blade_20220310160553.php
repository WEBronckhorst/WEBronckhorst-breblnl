<div class="flex flex-col mt-10 space-y-4 ">
    @php
        $teller = rand(1, 7)
    @endphp
    <div class="mt-5">
        <h3 class="ml-16 font-semibold text-blauw">
            Reacsies ( {{ $teller }} )
        </h3>
    </div>
    @for ($i = 1; $i <= $teller; $i++)
    <div class="px-10 ">
        @livewire('ticket-reacsieshow', ['nummer' => $i])
    </div>
    @endfor
</div>
