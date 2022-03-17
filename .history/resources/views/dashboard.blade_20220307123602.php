<?php use Carbon\Carbon; ?>
<x-app-layout>

    <x-slot name="header">
            {{ __('Dashboard') }}
    </x-slot>


    <div class="grid grid-flow-col grid-cols-4 gap-4 ">
        <div class="text-sm font-bold leading-6 text-center text-gray-500 rounded-lg bg-stripes-fuchsia">
            <div class="row-span-2 p-4 bg-white rounded-lg shadow-card">
                <div class="font-mono text-lg font-medium text-gray-700 ">
                    Klant #20200215
                </div>
                <div class="mt-2 text-xl text-blauw">
                    Iusto perferendis B.V.
                </div>
                <address class="inline-block w-4/5 px-4 py-4 mt-4 not-italic font-normal border-t">
                    {{ $klant->adres }}<br/>
                    {{ $klant->postcode . ' ' . $klant->plaats }}<br/>
                    <a href="#" class="underline ">{{ $klant->website }}</a><br/>
                    <a href="#" class="underline ">{{ $klant->telefoon }} </a><br/>
                    <a href="#" class="underline ">{{ $klant->email }} </a><br/>
                </address>
                <div class="">

                    <x-button   >
                        bewerk je gegevens
                    </x-button>

                </div>
            </div>
        </div>

        <div class="grid grid-flow-col grid-cols-2 col-span-3 row-span-1 gap-4 pb-10 ">
            <div class="justify-between col-span-1 row-span-1 space-x-4 row-span-3flex ">
                <div class="col-span-1 bg-white rounded-lg w-2s/5 shadow-card mb-9">
                    <div class="flex justify-between px-5 py-5 space-x-2 border-b">
                        <div class="text-2xl font-semibold text-blauw">FAQ</div>
                    </div>
                        <div class="flow-root mt-6 ">
                            <ul role="list" class="-my-5 divide-y divide-gray-200">
                                @forelse ($faqs as $faq)
                                <li class="px-10 py-5 pb-7">
                                    <div class="relative text-gray-500 hover:text-blauw-hover">
                                        <h3 class="text-sm font-semibold text-gray-800 hover:text-blauw-hover">
                                            <a href="#" class="hover:underline focus:outline-none ">
                                                <!-- Extend touch target to entire panel -->
                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                {{ $faq->title }}
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm line-clamp-2">{{ $faq->description }}</p>
                                    </div>
                                </li>
                                @empty
                                @endforelse
                            </ul>
                        </div>
                        <div class="flex justify-end px-5 mt-6 ">
                            <a href="#" class="px-4 py-2 mb-3 font-semibold text-white rounded-md text-md bg-blauw hover:bg-blauw-hover"> Alle FAQ </a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 col-span-1 row-span-1 bg-white rounded-lg shadow-card mb-9 ">
                    <div class="flex justify-between px-5 py-5 space-x-2 border-b">
                        <div class="text-2xl font-semibold text-blauw">Nieuwe tickets</div>
                    </div>
                    <div class="">
                        <label for="Titel" class="sr-only ">Titel van de je ticket</label>
                        <div class="px-5 py-5 ">
                            <input type="text" name="" id="" class="w-full px-2 py-2 border-2 rounded-md border-slate-300 ring-0 focus:outline-none focus:ring-blauw focus:border-blauw placeholder:text-gray-500 placeholder:font-semibold placeholder:text-sm" placeholder="Ticket Titel">
                        </div>
                    </div>
                    <div class="">
                        <label for="Titel" class="sr-only ">Beschijfing van de je ticket</label>
                        <div class="px-5 py-5 pt-1 ">
                            <textarea name="" id="" cols="20" rows="8" class="w-full px-2 py-2 border-2 rounded-md border-slate-300 ring-0 focus:outline-none focus:ring-blauw focus:border-blauw placeholder:text-gray-500 placeholder:font-semibold placeholder:text-sm" placeholder="Ticket Beschijfing" ></textarea>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex justify-end px-5 py-5 pt-1 ">
                            <input type="submit" value="Submit" class="px-4 py-2 font-semibold text-white rounded-md bg-blauw text-md hover:bg-blauw-hover ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-6 bg-white rounded-lg shadow-card">
                <div class="overflow-hidden bg-white shadow sm:rounded-md">
                    <div class="flex justify-between px-5 py-3 pt-5 space-x-2 border-b">
                        <div class="text-2xl font-semibold text-blauw">Jou tickets</div>
                        <div class="text-lg font-semibold text-gray-700 ">Totaal(22)</div>
                        <div class="px-4 py-2 font-semibold text-white rounded-md text-md bg-blauw hover:bg-blauw-hover">Alle jou tickets</div>
                    </div>

                    <ul role="list" class="divide-y divide-gray-200">
                        @forelse ($tickets as $ticket)


                    <li>
                        <a href="#" class="block hover:bg-sky-50">
                        <div class="flex items-center px-4 py-4 sm:px-6">
                            <div class="flex items-center flex-1 min-w-0">





                            <div class="flex justify-between flex-1 min-w-0">
                                <div >
                                <p class="flex justify-start space-x-2 text-lg font-semibold text-left text-stone-700 place-content-center" >
                                    <span> {{ $ticket->title }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 mt-2 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                      </svg>

                                    <span class="pt-1 text-base font-normal text-gray-800 "><span class="font-bold ">ticket id:</span><span> #{{ $ticket->ticket_id }}</span></span>
                                </p>
                                <p class="flex items-center mt-2 text-sm text-gray-500">
                                    <!-- Heroicon name: solid/mail -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="lex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                                      </svg>

                                    <span class="truncate">{{ rand(5, 12) }}</span>
                                </p>
                                </div>
                                <div class="hidden md:block">
                                <div class="mr-5">
                                    <p class="flex justify-end pr-2 space-x-1 text-sm text-gray-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                          </svg>
                                    <time datetime="2020-01-07">{{ Carbon::create($ticket->created_at)->translatedFormat('d M y')  }}</time>
                                    </p>
                                    <div class="flex justify-end mt-2 text-sm text-gray-500 felx">
                                    <!-- Heroicon name: solid/check-circle -->
                                        <div class="  text-white bg-green-700 rounded-xl place-content-center px-4 py-[3px] flex space-x-2 justify-between  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-[2px] text-green-100 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                              </svg>
                                              Openstaant
                                            </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div>
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                            </div>
                        </div>
                        </a>
                    </li>
                    @empty

                        @endforelse

                    </ul>
                </div>
        </div>


</x-app-layout>
