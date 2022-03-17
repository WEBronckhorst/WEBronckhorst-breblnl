<div class="flex flex-col space-y-7 ">
    @php
        $teller = rand(1, 7)
    @endphp
    <div class="mt-4">
        <h3 class="ml-16 font-semibold text-blauw">
            Reacsies ( {{ $teller }} )
        </h3>
    </div>
    @forelse ($reacsies as $reacsie )

    @empty

    @endforelse
    @for ($i = 1; $i <= $teller; $i++)
    <div class="px-10 ">
        @livewire('ticket-reacsieshow', ['nummer' => $i])
    </div>
    @endfor
</div>
