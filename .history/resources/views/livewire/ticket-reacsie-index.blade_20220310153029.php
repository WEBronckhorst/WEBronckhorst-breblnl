<div>
    @for ($i = 1; $i <= 4; $i++)
    <div class="">
        @livewire('ticket-reacsieshow', ['id' => $i])
    </div>
    @endfor
</div>
