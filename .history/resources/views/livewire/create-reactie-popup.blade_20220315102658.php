<div x-data="{ open: @entangle('showDropdown') }" @keyup.escape.window="open = false" >
    <button x-on:click=" open = !open" class=" bt-blauw">
        Reageer
    </button>
    <div x-show="open" @click.outside="open = false"  class="fixed bottom-0 left-0 w-full "  >
        <form  wire:submit.prevent="save" >
            <div class="w-full max-w-3xl px-5 pt-10 pb-4 mx-auto bg-white border shadow-card rounded-t-xl ">
                <div class="">
                    <div wire:ignore class="form-group row">
                        <x-label class="col-md-3 col-form-label" for="reageer" :value="__('Compose message')" />
                        <div class="col-md-9">
                            <textarea wire:model="description" class="form-control required" name="message" id="reageer"></textarea>

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
    import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';
    import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';
    import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold';
    import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic';
    import Underline from '@ckeditor/ckeditor5-basic-styles/src/underline';
    import Strikethrough from '@ckeditor/ckeditor5-basic-styles/src/strikethrough';
    import Mention from '@ckeditor/ckeditor5-mention/src/mention';
    import Link from '@ckeditor/ckeditor5-link/src/link';
    import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph';
     ClassicEditor
       .create(document.querySelector('#reageer'), {

        extraPlugins: [ Essentials, Paragraph, Mention, MentionLinks, Bold, Italic, Underline, Strikethrough, Link ],
        toolbar: {
            items: [
                'bold', 'italic', 'underline', 'strikethrough', '|', 'link', '|', 'undo', 'redo'
            ]
        }
    })
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


