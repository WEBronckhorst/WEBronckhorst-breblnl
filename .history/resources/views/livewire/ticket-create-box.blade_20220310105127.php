<div class="">
    <div class="flex justify-between px-5 py-5 space-x-2 border-b">
        <div class="text-2xl font-semibold text-blauw">Nieuwe tickets</div>
    </div>
   <form  wire:submit.prevent="save">
    <div class="">
        <label for="titel" class="sr-only ">Titel van de je ticket</label>
        <div class="px-5 py-5 ">
            <input wire:model="title" type="text" name="title" id="titel" class="w-full px-2 py-2 border-2 rounded-md border-slate-300 ring-0 focus:outline-none focus:ring-blauw focus:border-blauw placeholder:text-gray-500 placeholder:font-semibold placeholder:text-sm" placeholder="Ticket Titel">
        </div>
    </div>
    <div class="">
        <label for="description" class="sr-only ">Beschijfing van de je ticket</label>
        <div class="px-5 py-5 pt-1 ">
            <textarea  x-data="editorApp()" x-init="init($dispatch)" wire:ignore wire:key="ckEditor" x-ref="ckEditor" wire:model.debounce.9999999ms="description" id="description_simpel" cols="20" rows="8" class="w-full px-2 py-2 border-2 rounded-md border-slate-300 ring-0 focus:outline-none focus:ring-blauw focus:border-blauw placeholder:text-gray-500 placeholder:font-semibold placeholder:text-sm" placeholder="Ticket Beschijfing" ></textarea>
        </div>
    </div>
    <div class="">
        <div class="flex justify-end px-5 py-5 pt-1 ">
            <input type="submit" value="Submit" class="px-4 py-2 font-semibold text-white rounded-md bg-blauw text-md hover:bg-blauw-hover ">
        </div>
    </div>
   </form>
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
                editor.setData('{!! $description !!}')
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

</div>
