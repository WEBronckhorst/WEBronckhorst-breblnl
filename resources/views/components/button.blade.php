<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-blauw border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blauw-hover active:bg-blauw focus:outline-none focus:border-blauw focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
