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
        <div class="px-5 py-5 pt-1 ">
            <textarea  wire:model="description" name="description" id="description" cols="20" rows="8" class="w-full px-2 py-2 border-2 rounded-md border-slate-300 ring-0 focus:outline-none focus:ring-blauw focus:border-blauw placeholder:text-gray-500 placeholder:font-semibold placeholder:text-sm" placeholder="Ticket Beschijfing" ></textarea>
        </div>
    </div>
    <div class="">
        <div class="flex justify-end px-5 py-5 pt-1 ">
            <input type="submit" value="Submit" class="px-4 py-2 font-semibold text-white rounded-md bg-blauw text-md hover:bg-blauw-hover ">
        </div>
    </div>
   </form>
   <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
   <script>
               ClassicEditor
                   .create(document.querySelector('#message'))
                   .then(editor => {
                       editor.model.document.on('change:data', () => {
                       @this.set('message', editor.getData());
                       })
                  })
                   .catch(error => {
                       console.error(error);
                   });
</div>
