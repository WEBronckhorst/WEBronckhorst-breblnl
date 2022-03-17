<div>
    <div class="row-span-2 bg-white rounded-lg shadow-card">
        <div class="flex justify-between px-5 py-5 mb-1 space-x-2 border-b">
            <div class="text-2xl font-semibold text-blauw">FAQ</div>
            <div class="mt-1">
                <a href="{{ route('faq.create') }}" class="px-4 py-2 mt-5 font-semibold text-white rounded-md text-md bg-blauw hover:bg-blauw-hover"> Nieuwe FAQ </a>
            </div>
        </div>
        <nav class="px-4 py-5 space-y-2" aria-label="Sidebar">
            <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">

                <a wire:click.prevent="setStatus('All')" href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'All') bg-blauw  text-white @else bg-gray-200  @endif">All Ideas ({{ $statusCount['all_statuses'] }})</a>
                <a wire:click.prevent="setStatus('Open')" href="#" class=" flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'Open') bg-blauw  text-white @else bg-gray-200  @endif">Considering ({{ $statusCount['considering'] }})</a>
                <a wire:click.prevent="setStatus('In behandeling')" href="#" class=" flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'In_behandeling') bg-blauw  text-white @else bg-gray-200  @endif">In Progress ({{ $statusCount['In_behandeling'] }})</a>
                <a wire:click.prevent="setStatus('Geïmplementeerd')" href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'Geïmplementeerd') bg-blauw  text-white @else bg-gray-200  @endif">Implemented ({{ $statusCount['Geïmplementeerd'] }})</a>
                <a wire:click.prevent="setStatus('Afgerond')" href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'Afgerond') bg-blauw  text-white @else bg-gray-200  @endif">Implemented ({{ $statusCount['Afgerond'] }})</a>
                <a wire:click.prevent="setStatus('Geannuleerd')" href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600  rounded-md hover:hover:text-gray-900  no-underline @if ($status === 'Geannuleerd') bg-blauw  text-white @else bg-gray-200  @endif">Closed ({{ $statusCount['Geannuleerd'] }})</a>  </ul>


        </nav>
        <!-- This example requires Tailwind CSS v2.0+ -->



    </div>

</div>
