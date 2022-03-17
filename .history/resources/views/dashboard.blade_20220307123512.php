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
                <div class="flex-1 bg-white rounded-lg shadow-card mb-9 ">
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




        </div>
      </div>


</x-app-layout>
