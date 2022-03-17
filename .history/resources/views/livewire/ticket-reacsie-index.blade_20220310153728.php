<div class="flex flex-col space-y-4 ">
    <div class="mt-5">
        <h3 class="ml-16 font-semibold text-blauw">
            Reacsies
        </h3>
    </div>
    @for ($i = 1; $i <= 4; $i++)
    <div class="ml-10 ">
        @livewire('ticket-reacsieshow', ['nummer' => $i])
    </div>
    @endfor
</div>
