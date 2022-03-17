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
    <div wire:ignore class="form-group row">
        <x-label class="col-md-3 col-form-label" for="message" :value="__('Compose message')" />
        <div class="col-md-9">
            <textarea wire:model="message" class="form-control required" name="message"
                id="message"></textarea>

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
    const editor = CKEDITOR.replace('message');

    # OR 1
    editor.on('change', function (event) {
        // console.log(event.editor.getData())
        @this.set('message', event.editor.getData());
    })

    # OR 2

     CKEDITOR.instances.message.on('change', function() {
          @this.set('message', this.getData());
      });

    # OR 3 now I don't want to render data in each request
     document.querySelector("#submit").addEventListener("click", () => {
        // console.log(editor.getData())
        @this.set('message', editor.getData());
    });
</script>

</div>
