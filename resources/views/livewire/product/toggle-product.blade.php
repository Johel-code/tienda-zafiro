<div>
    <label class="relative inline-flex cursor-pointer items-center">
        <input wire:model="isActive" type="checkbox" value="" class="sr-only peer" id="{{$field.$product->id}}">
        <span for="{{ $field.$product->id }}" class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-3 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#3988FF]"></span>
    </label>
    
    @if($mostrarModalSwitch)
    <div class="fixed inset-0 z-20">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>
            <div class="border-8 border-white inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all align-middle" style="width: 9cm; height: 3.5cm;">
            <!--Contenido-->

                <div class="flex justify-center mb-5 mt-6">
                    <h2 class=" text-xl font-bold">¿Estás seguro?</h2>
                </div>

                <div class="flex justify-center">
                    
                    <button type=button wire:click="confirmarSwitch()" class="rounded-md border border-white shadow-md 
                         bg-[#3988FF] hover:bg-blue-700 font-bold text-white py-1 mr-6  w-28">Si
                    </button>
                    <button type=button wire:click="cerrarModalSwitch()" class="rounded-md border border-white shadow-md 
                        bg-[#597AAB]  hover:bg-gray-700 font-bold text-white py-1 ml-6 w-28">No
                    </button>
                </div>
    
            <!--finContenido-->
            </div>
        </div>
    </div>
    @endif
</div>
