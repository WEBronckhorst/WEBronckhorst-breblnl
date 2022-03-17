<div class="">
    <div class="flex justify-between px-5 py-5 space-x-2 border-b">
        <div class="text-2xl font-semibold text-blauw">Nieuwe tickets</div>
    </div>
   <form  wire:submit.prevent="save">
    <div class="">
        <label for="titel" class="sr-only ">Titel van de je ticket</label>
        <div class="px-5 py-5 ">
            <input wire:model="title" type="text" name="titel" id="titel" class="w-full px-2 py-2 border-2 rounded-md border-slate-300 ring-0 focus:outline-none focus:ring-blauw focus:border-blauw placeholder:text-gray-500 placeholder:font-semibold placeholder:text-sm" placeholder="Ticket Titel">
        </div>
    </div>
    <div class="">
        <label for="description" class="sr-only ">Beschijfing van de je ticket</label>
        <div class="px-5 py-3 pt-1 ">
            <textarea
            wire:ignore
            wire:key="editor-{{ now() }}"
            class="w-full" wire:model.lazy="description" name="content" id="content"></textarea>
           // <textarea wire:model="description" class="form-control required" name="description" id="description1"></textarea>
        </div>
    </div>
    <div class="">
        <div class="flex justify-end px-5 py-5 pt-1 ">
            <input type="submit" value="Submit" class="px-4 py-2 font-semibold text-white rounded-md bg-blauw text-md hover:bg-blauw-hover ">
        </div>
    </div>
    </form>
    <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <script>
        const editor = CKEDITOR.replace('content', {
            height: 250,
            filebrowserUploadUrl: "{{ route('posts.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
        editor.on('change', function(event) {
            @this.set('content', event.editor.getData());
        })

        CKEDITOR.config.allowedContent = true;
        CKEDITOR.filebrowserUploadMethod = 'form';
        CKEDITOR.editorConfig = function(config) {
            config.extraPlugins = 'colorbutton,colordialog,panelbutton';
        };

        CKEDITOR.on('dialogDefinition', function(ev) {
            var dialogName = ev.data.name;
            var dialogDefinition = ev.data.definition;

            if (dialogName == 'image') {
                var infoTab2 = dialogDefinition.getContents('advanced');
                dialogDefinition.removeContents('advanced');
                var infoTab = dialogDefinition.getContents('info');
                infoTab.remove('txtBorder');
                infoTab.remove('cmbAlign');
                infoTab.remove('txtWidth');
                infoTab.remove('txtHeight');
                infoTab.remove('txtCellSpace');
                infoTab.remove('txtCellPad');
                infoTab.remove('txtCaption');
                infoTab.remove('txtSummary');
            }
        });

    </script>
</div>
