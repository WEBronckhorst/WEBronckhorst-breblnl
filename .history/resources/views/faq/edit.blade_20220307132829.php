<?php use Carbon\Carbon; ?>
<x-app-layout>

    <x-slot name="header">
            {{ __('Niuwe FAQ') }}
    </x-slot>


    <div class="grid grid-flow-col grid-cols-4 gap-4 ">
        <div class="col-span-1 row-span-1 text-sm font-bold leading-6 text-center text-gray-500 rounded-lg bg-stripes-fuchsia">
            <div class="row-span-2 bg-white rounded-lg shadow-card">


            </div>
        </div>
        <div class="col-span-3 row-span-3 pb-10 text-sm font-bold leading-6 text-gray-500 rounded-lg bg-stripes-fuchsia">
            <div class="row-span-2 bg-white rounded-lg shadow-card">
                <div class="flex justify-between px-5 py-5 mb-1 space-x-2 border-b">
                    <div class="text-2xl font-semibold text-blauw">Nieuwe FAQ</div>
                </div>
                <div class="px-5 pt-3">
                    <div class="container mt-5">
                        <form method="post" action="{{ route('file-upload') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $faq->title }}" />
                            </div>
                            <div class="form-group">
                                <label >Category</label>
                                <select name="category" id="category"class="bg-white form-control"  >
                                    @foreach ($faqCategorys as $category)
                                    <option value="{{ $category->id }}"
                                        @if ($category->id == $faq->faq_category_id)
                                            @selected(true)
                                        @endif
                                        >{{ $category->title }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <div class="px-6 py-3 border rounded-lg min-h-fit ">
                                    <textarea id="summernote" name="description" class="w-full h-80" >
                                        {!! $faq->description !!}
                                    </textarea>
                                </div>
                            </div>
                            <div class="text-center form-group">
                                <button type="submit" class="btn btn-danger btn-block">update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>






</x-app-layout>
