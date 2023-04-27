<div>
    <label class="relative inline-flex cursor-pointer items-center">
        <input wire:model="isActive" type="checkbox" value="" class="sr-only peer" id="{{$field.$product->id}}">
        <span for="{{ $field.$product->id }}" class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-3 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#3988FF]"></span>
    </label>
</div>
