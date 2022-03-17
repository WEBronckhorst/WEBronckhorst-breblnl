<div class="flex flex-col space-y-7 ">

<div class="mt-4">
    <h3 class="ml-16 font-semibold text-blauw">
        Reacsies ( {{ $teller }} )
    </h3>
</div>
@forelse ($reacsies as $reacsie )
    @livewire('ticket-reacsieshow', ['reacsie' => $reacsie])
@empty

@endforelse

</div>
