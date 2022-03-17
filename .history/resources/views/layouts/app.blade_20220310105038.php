<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <!-- Scripts -->


        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


        <meta name="csrf-token" content="{{ csrf_token() }}" />
        {{-- CKEditor 4 CDN --}}
        <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-slate-100">

        <div>
            @include('layouts.navigation')
            <!-- Mobile -->

            <!-- Navigation ends -->
            <!-- Page title starts -->
            <div class="relative z-10 pt-8 pb-16 bg-blauw -z-10">
                <div class="container flex flex-col items-start justify-between px-6 mx-auto lg:flex-row lg:items-center">
                    <div class="flex flex-col items-start lg:flex-row lg:items-center">

                        <div class="my-6 ml-0 lg:ml-5 lg:my-0">
                            <h4 class="mb-2 text-2xl font-bold leading-tight text-white">{{ $header }}</h4>
                            <p class="flex items-center text-xs text-gray-300">
                                <span class="cursor-pointer">WE Support</span>
                                <span class="mx-2">&gt;</span>
                                <span class="cursor-pointer">{{ $header }}</span>

                            </p>
                        </div>
                    </div>
                    @if ($header_links ?? '')
                    <div>
                        <button class="px-5 py-2 mr-3 text-sm text-white transition duration-150 ease-in-out bg-transparent border border-white rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 hover:bg-gray-700">Back</button>
                        <button class="px-8 py-2 text-sm text-indigo-700 transition duration-150 ease-in-out bg-white border rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-gray-200">Edit Profile</button>
                    </div>
                    @else

                    @endif
                </div>
            </div>
            <!-- Page title ends -->
            <div class="container px-6 mx-auto">
                <!-- Remove class [ h-64 ] when adding a card block -->
                <div class="relative w-full h-64 mb-8 -mt-12 rounded shadow">
                    <!-- Place your content here -->
                    {{ $slot }}
                </div>
            </div>
        </div></div></div></div>





        <script>
            CKEDITOR.replace('description_simpel', {
                height: 150,
                toolbarGroups: [{
                    "name": "basicstyles",
                    "groups": ["basicstyles"]
                    },
                    {
                    "name": "links",
                    "groups": ["links"]
                    },
                    {
                    "name": "paragraph",
                    "groups": ["list", "blocks"]
                    },

                    {
                    "name": "insert",
                    "groups": ["insert"]
                    }],
                filebrowserUploadUrl: "{{ route('posts.upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form',
                removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Cut,Copy,Paste,Undo,Redo,Anchor,Underline,Strike,Subscript,Superscript'
            });
        </script>

        <script>
            CKEDITOR.replace('description', {
                filebrowserUploadUrl: "{{ route('posts.upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form'
                height: 350,

            })
        </script>
           <script>
            /**
             * An alpinejs app that handles CKEditor's lifecycle
             */
            function editorApp() {
                return {
                    /**
                     * The function creates the editor and returns its instance
                     * @param $dispatch Alpine's magic property
                     */
                    create: async function($dispatch) {
                        // Create the editor with the x-ref
                        const editor = await ClassicEditor.create(this.$refs.ckEditor);
                        // Handle data updates
                        editor.model.document.on('change:data', function() {
                            $dispatch('input', editor.getData())
                        });
                        // return the editor
                        return editor;
                    },
                    /**
                     * Initilizes the editor and creates a listener to recreate it after a rerender
                     * @param $dispatch Alpine's magic property
                     */
                    init: async function($dispatch) {
                        // Get an editor instance
                        const editor = await this.create($dispatch);
                        // Set the initial data
                        editor.setData('{!! $content !!}')
                        // Pass Alpine context to Livewire's
                        const $this = this;
                        // On reinit, destroy the old instance and create a new one
                        Livewire.on('reinit', async function(e) {
                            editor.destroy();
                            await $this.create($dispatch);
                        });
                    }
                }
            }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


   @livewireScripts
    </body>
</html>
