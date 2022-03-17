<div x-data="{ open: @entangle('showDropdown') }" @keyup.escape.window="open = false" >
    <button x-on:click=" open = !open" class=" bt-blauw">
        Bewerk Status
    </button>
    <div x-show="open" @click.outside="open = false"  class="fixed bottom-0 left-0 w-full "  >
        <form  wire:submit.prevent="seetStaus" >
            <div>
                <label class="text-base font-medium text-gray-900">Notifications</label>
                <p class="text-sm leading-5 text-gray-500">How do you prefer to receive notifications?</p>
                <fieldset class="mt-4">
                  <legend class="sr-only">Notification method</legend>
                  <div class="space-y-4">
                    <div class="flex items-center">
                      <input wire:model="status" id="email" name="notification-method" type="radio" checked class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                      <label for="email" class="block ml-3 text-sm font-medium text-gray-700"> Open </label>
                    </div>

                    <div class="flex items-center">
                      <input wire:model="status" id="sms" name="notification-method" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                      <label for="sms" class="block ml-3 text-sm font-medium text-gray-700"> Phone (SMS) </label>
                    </div>

                    <div class="flex items-center">
                      <input wire:model="status" id="push" name="notification-method" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                      <label for="push" class="block ml-3 text-sm font-medium text-gray-700"> Push notification </label>
                    </div>
                  </div>
                </fieldset>
              </div>
        </form>

    </div>
</div>
