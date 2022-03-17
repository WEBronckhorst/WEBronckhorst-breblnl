<?php use Carbon\Carbon; ?>
<x-app-layout>

    <x-slot name="header">
            {{ __('FAQ') }}
    </x-slot>

    @dump( $_SERVER['REMOTE_ADDR'])
    <div class="grid grid-flow-col grid-cols-4 gap-4 ">
        <div class="col-span-1 row-span-1 text-sm font-bold leading-6 text-center text-gray-500 rounded-lg bg-stripes-fuchsia">
            <div class="row-span-2 bg-white rounded-lg shadow-card">
                <div class="flex justify-between px-5 py-5 mb-1 space-x-2 border-b">
                    <div class="text-2xl font-semibold text-blauw">FAQ</div>
                </div>
                <!-- This example requires Tailwind CSS v2.0+ -->
                <nav class="px-4 py-5 space-y-2" aria-label="Sidebar">
                    <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-50 hover:text-gray-900">

                        <x-vertical-navigation-link herf="#" :active="true"> Alles</x-vertical-navigation-link>
                    @foreach ($faqCategorys as $faqCategory)
                    <x-vertical-navigation-link herf="#" :active="false"> {{ $faqCategory->title }} </x-vertical-navigation-link>
                    @endforeach

                </nav>


            </div>
        </div>
        <div class="col-span-3 row-span-3 pb-10 text-sm font-bold leading-6 text-gray-500 rounded-lg bg-stripes-fuchsia">
            <div class="row-span-2 bg-white rounded-lg shadow-card">
                <div class="flex justify-between px-5 py-5 mb-1 space-x-2 border-b">
                    <div class="text-2xl font-semibold text-blauw">{{ $faq->title }}</div>
                    @admin
                    <a href="{{ route('faq.edit', $faq->id ) }}">bewerk</a>
                    @endadmin
                </div>
                <div class="px-5 pt-3">
                    <p>
                        {!! $faq->description !!}
                    </p>
                </div>
                <div class="flex justify-between px-5 pt-6 space-x-2 pb-7">
                    <div class="flex justify-start space-x-2">
                        <div class="text-lg text-blauw">Hoe vaardervol vond je deze faq? </div>
                        <div class="flex justify-start pt-1 skew-x-1">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-300" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-300" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="mt-1">
                            <a href="#" class="px-4 py-2 mt-5 font-semibold text-white rounded-md text-md bg-blauw hover:bg-blauw-hover"> Vragen of opmerigen? </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>










</x-app-layout>
