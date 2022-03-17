<div x-data="{ open: true }" @keyup.escape.window="open = false" >
    <button x-on:click=" open = !open" class=" bt-blauw">
        Reageer
    </button>
    <div x-show="open" @click.outside="open = false"  class="fixed bottom-0 left-0 w-full "  >
        <form  wire:submit.prevent="save" >
            <div class="w-full max-w-3xl px-5 pt-10 pb-4 mx-auto bg-white border shadow-card rounded-t-xl ">
                @admin
                <div class="mt-4">
                    <label for="alsuser">Plaats als gebuiker</label>
                    <div class="">

                        <select  wire:model="asuser" class="w-full px-3 py-2 border rounded-md ">

                            @foreach ($users as $user)
                            <option value="{{ $user->id }}"
                                >{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endadmin
                <div class="">
                    <label for="reacise" class="py-2 font-medium test-lg">Reageer op dit bericht:</label>
                    <textarea wire:model="message" class="form-control required" name="message"
                id="message"></textarea>
                </div>

                <div class="">
                    <div class="flex justify-end pt-4">
                        <input type="submit" value="Submit" id="submit" class="bt-blauw">
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

<script>
    const editor = CKEDITOR.replace('message');
    document.querySelector("#submit").addEventListener("click", () => {
        // console.log(editor.getData())
        @this.set('description', editor.getData());
    });
</script>
