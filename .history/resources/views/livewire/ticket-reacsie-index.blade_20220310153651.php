<div class="flex flex-col space-y-4 ">
    <div class="mt-5">
        <h3 class="text-xl font-semibold text-blauw">
            reacsies
        </h3>
    </div>
    @for ($i = 1; $i <= 4; $i++)
    <div class="ml-10 ">
        @livewire('ticket-reacsieshow', ['nummer' => $i])
    </div>
    @endfor
</div>
