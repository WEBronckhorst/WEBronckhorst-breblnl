<div x-data="{ open : true }" @keyup.escape.window="open = false" >
    <button x-on:click=" open = !open" class=" bt-blauw">
        Bewerk Status
    </button>
    <div x-show="open" @click.outside="open = false"  class="fixed bottom-0 left-0 w-full "  >
        <form  wire:submit.prevent="seetStaus" >
            <div class="w-full max-w-3xl px-5 pt-10 pb-4 mx-auto bg-white border shadow-card rounded-t-xl ">
                <label class="text-base font-medium text-gray-900">Notifications</label>
                <p class="text-sm leading-5 text-gray-500">How do you prefer to receive notifications?</p>
                <fieldset class="mt-4">
                    <legend class="sr-only">Notification method</legend>
                    <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                        <div class="flex items-center">
                            <input wire:model="status" id="open" name="Status" type="radio" value="=1" checked class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label for="Open" class="block ml-3 text-sm font-medium text-gray-700"> Open </label>
                        </div>

                        <div class="flex items-center">
                            <input wire:model="status" id="inBehandeling" name="Status" type="radio" value="2" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label for="inBehandeling" class="block ml-3 text-sm font-medium text-gray-700">  in behandeling </label>
                        </div>

                        <div class="flex items-center">
                            <input wire:model="status" id="afgerond" name="status type="radio" value="3" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                            <label for="afgerond" class="block ml-3 text-sm font-medium text-gray-700">  Afgerond </label>
                        </div>
                    </div>
                </fieldset>

                <label class="text-base font-medium text-gray-900">Notifications</label>
                <p class="text-sm leading-5 text-gray-500">How do you prefer to receive notifications?</p>
                <fieldset class="mt-4">
                    <legend class="sr-only">Notification method</legend>
                    <div class="space-5-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                    <div class="flex items-center">
                        <input id="email" name="notification-method" type="radio" checked class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                        <label for="email" class="block ml-3 text-sm font-medium text-gray-700"> Email </label>
                    </div>

                    <div class="flex items-center">
                        <input id="sms" name="notification-method" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                        <label for="sms" class="block ml-3 text-sm font-medium text-gray-700"> Phone (SMS) </label>
                    </div>

                    <div class="flex items-center">
                        <input id="push" name="notification-method" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                        <label for="push" class="block ml-3 text-sm font-medium text-gray-700"> Push notification </label>
                    </div>
                    </div>
                </fieldset>
                <div class="">
                    <div class="flex justify-end pt-4">
                        <input type="submit" value="Submit" id="submit" class="bt-blauw">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
