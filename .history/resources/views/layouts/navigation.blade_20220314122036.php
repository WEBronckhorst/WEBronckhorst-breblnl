
<!-- Navigation starts -->
<nav class="relative z-20 w-full mx-auto bg-white shadow">
    <div class="flex items-center justify-between h-16 mx-auto lg:items-stretch">
        <div class="flex items-center">
            <div aria-label="Home" role="img" class="flex items-center pl-24 pr-10 mr-10">
                <x-application-logo class="block w-auto h-10 text-gray-600 fill-current" />

            </div>

            <ul class="flex items-center hidden h-full pr-32 space-x-3 xl:flex">
                 <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">{{ __('Dashboard') }}</x-nav-link>
                <x-nav-link :href="route('ticket.index')" :active="false">{{ __('Ticket') }}</x-nav-link>
                <x-nav-link :href="route('dashboard')" :active="false">{{ __('wachtworden') }}</x-nav-link>
                <x-nav-link :href="route('faq.index')" :active="request()->routeIs('faq.index')">{{ __('FAQ') }}</x-nav-link>
                <x-nav-link :href="route('dashboard')" :active="false">{{ __('Vragen') }}</x-nav-link>
            </ul>
        </div>




        <div class="items-center justify-end hidden h-full xl:flex">
            <div class="flex items-center h-full">

                <div class="flex w-full h-full">
                    <div class="flex items-center justify-center w-16 h-full xl:w-32 xl:border-r">
                        <div class="relative">
                            <a aria-label="show notifications" role="link" href="" class="w-6 h-6 text-gray-600 cursor-pointer xl:w-auto xl:h-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                                </svg>
                            </a>
                            <div class="absolute inset-0 w-2 h-2 m-auto mt-1 mr-1 bg-red-400 border border-white rounded-full animate-ping"></div>
                        </div>
                    </div>
                    <div  x-data="{ open: false }" class="relative flex items-center justify-center w-full pr-16 cursor-pointer hover:bg-slate-200" >
                        <button x-on:click="open = ! open"  class="flex items-center rounded focus:outline-none focus:ring-0 focus:ring-gray-800">
                            <img class="object-cover w-10 h-10 border border-gray-400 rounded-full" src="{{ Auth::user()->getAvatar() }}" alt="avatar" />
                            <p class="ml-2 text-sm text-gray-800">{{ Auth::user()->name }}</p>

                        </button>
                        <ul x-show="open" class="absolute left-0 z-40 w-40 p-2 mt-64 bg-white border-r rounded shadow ">
                            <li class="py-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-blauw focus:text-blauw focus:outline-none">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="7" r="4" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    </svg>
                                    <a href="" class="ml-2">My Profile</a>
                                </div>
                            </li>
                            <li class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-blauw focus:text-blauw focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <circle cx="12" cy="12" r="9" />
                                    <line x1="12" y1="17" x2="12" y2="17.01" />
                                    <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" />
                                </svg>
                                <a href="" class="ml-2">Help Center</a>
                            </li>
                            <li class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-blauw focus:text-blauw focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                                <a href="" class="ml-2">Account Settings</a>
                            </li>


                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-blauw focus:text-blauw focus:outline-none">
                                    <svg  class="icon icon-tabler icon-tabler-settings" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                      </svg>
                                    <a class="ml-2" :href="route('logout')"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();"> {{ __('Log Out') }}</a>
                            </li>
                                </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center visible xl:hidden">
            <div>
                <button id="menu" class="text-gray-800 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" >
                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light_with_dark_page_title_and_white_box-svg7.svg" alt="toggler">
                </button>
            </div>
        </div>
    </div>
</nav>
