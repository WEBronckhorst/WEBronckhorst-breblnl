<div class="">
    <div class="flex justify-between px-5 py-5 space-x-2 border-b">
        <div class="text-2xl font-semibold text-blauw">Nieuwe tickets</div>
    </div>
   <form  wire:submit.prevent="save" class="">

    <div wire:ignore class="form-group row">
        <label for="description" class="sr-only ">Beschijfing van de je ticket</label>
        <div class="px-5 py-3 pt-1 ">
            <textarea wire:model="message" class="form-control required" name="message"
            id="message"></textarea>
        </div>
    </div>

    <div class="">
        <div class="flex justify-end px-5 py-5 pt-1 ">
            <input type="submit" value="Submit" id="submit" class="px-4 py-2 font-semibold text-white rounded-md bg-blauw text-md hover:bg-blauw-hover ">
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <script>
        const editor = CKEDITOR.replace('message');
            document.querySelector("#submit").addEventListener("click", () => {
                // console.log(editor.getData())
            @this.set('message', editor.getData());
        });
    </script>

    </form>


</div>
