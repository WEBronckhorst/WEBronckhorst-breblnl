<div>
    <nav class="px-4 py-5 space-y-2" aria-label="Sidebar">
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">

            <x-vertical-navigation-link herf="#" :active="true"> Alles</x-vertical-navigation-link>
        @foreach ($statuss as $id=>$status )
        <x-vertical-navigation-link herf="#" :active="false"> {{ $status }} </x-vertical-navigation-link>
        @endforeach

    </nav>
</div>
