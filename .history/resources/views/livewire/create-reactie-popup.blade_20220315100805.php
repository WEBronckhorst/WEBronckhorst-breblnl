<div x-data="{ open: @entangle('showDropdown') }" @keyup.escape.window="open = false" >
    <button x-on:click=" open = !open" class=" bt-blauw">
        Reageer
    </button>
    <div x-show="open" @click.outside="open = false"  class="fixed bottom-0 left-0 w-full "  >
        <form  wire:submit.prevent="save" >
            <div class="w-full max-w-3xl px-5 pt-10 pb-4 mx-auto bg-white border shadow-card rounded-t-xl ">
                <div class="">
                    <div wire:ignore class="form-group row">
                        <x-label class="col-md-3 col-form-label" for="message" :value="__('Compose message')" />
                        <div class="col-md-9">
                            <textarea wire:model="description" class="form-control required" name="message" id="message"></textarea>
                            <x-error-message :value="__('description')" />
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="flex justify-end pt-4">
                        <input type="submit" value="Submit" id="submit" class="bt-blauw">
                    </div>
                </div>
            </div>
        </form>

    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

<script>
     ClassicEditor
       .create(document.querySelector('#message'))
       .then(editor => {
           editor.model.document.on('change:data', () => {
           @this.set('description', editor.getData());
          })
       })
       .catch(error => {
          console.error(error);
       });
</script>

</div>


