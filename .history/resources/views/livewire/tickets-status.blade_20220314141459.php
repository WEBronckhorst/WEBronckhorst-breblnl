<div>
    <nav class="px-4 py-5 space-y-2" aria-label="Sidebar">
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">

                <a wire:click.prevent="setStatus('All')" href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'All') bg-blauw  text-white @else bg-gray-200  @endif">All Ideas ({{ $statusCount['all_statuses'] }})</a>
                <a wire:click.prevent="setStatus('Considering')" href="#" class=" flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'Considering') bg-blauw  text-white @else bg-gray-200  @endif">Considering ({{ $statusCount['considering'] }})</a>
                <a wire:click.prevent="setStatus('In Progress')" href="#" class=" flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'In Progress') bg-blauw  text-white @else bg-gray-200  @endif">In Progress ({{ $statusCount['in_progress'] }})</a>
                <a wire:click.prevent="setStatus('Implemented')" href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'Implemented') bg-blauw  text-white @else bg-gray-200  @endif">Implemented ({{ $statusCount['implemented'] }})</a>
                <a wire:click.prevent="setStatus('Closed')" href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'Closed') bg-blauw  text-white @else bg-gray-200  @endif">Closed ({{ $statusCount['closed'] }})</a>  </ul>


    </nav>
</div>
