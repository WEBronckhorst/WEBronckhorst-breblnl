<div>
    <nav class="px-4 py-5 space-y-2" aria-label="Sidebar">
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">
            <x-vertical-navigation-link herf="#" :active="true"> Alles</x-vertical-navigation-link>
            <nav class="items-center justify-between hidden text-xs text-gray-400 md:flex">
                <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
                    <li><a wire:click.prevent="setStatus('All')" href="#" class="border-b-4 pb-3 hover:border-blue @if ($status === 'All') border-blue text-gray-900 @endif">All Ideas ({{ $statusCount['all_statuses'] }})</a></li>
                     <li><a wire:click.prevent="setStatus('Considering')" href="#" class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'Considering') border-blue text-gray-900 @endif">Considering ({{ $statusCount['considering'] }})</a></li>
                     <li><a wire:click.prevent="setStatus('In Progress')" href="#" class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'In Progress') border-blue text-gray-900 @endif">In Progress ({{ $statusCount['in_progress'] }})</a></li>
                </ul>

                <ul class="flex pb-3 space-x-10 font-semibold uppercase border-b-4">
                    <li><a wire:click.prevent="setStatus('Implemented')" href="#" class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'Implemented') border-blue text-gray-900 @endif">Implemented ({{ $statusCount['implemented'] }})</a></li>
                    <li><a wire:click.prevent="setStatus('Closed')" href="#" class=" transition duration-150 ease-in border-b-4 pb-3 hover:border-blue @if ($status === 'Closed') border-blue text-gray-900 @endif">Closed ({{ $statusCount['closed'] }})</a></li>    </ul>
            </nav>


    </nav>
</div>
