<div>
    @for ($i = 1; $i <= 4; $i++)
    <div class="">
        @livewire('ticket-reacsieshow', ['nummer' => $i])
    </div>
    @endfor
</div>
