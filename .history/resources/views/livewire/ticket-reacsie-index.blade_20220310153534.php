<div class="flex flex-col ml-5 space-y-4 ">
    <div class="mt-5">
        <h3>
            reacsies
        </h3>
    </div>
    @for ($i = 1; $i <= 4; $i++)
    <div class="">
        @livewire('ticket-reacsieshow', ['nummer' => $i])
    </div>
    @endfor
</div>
