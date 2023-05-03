<div>
    
    {{-- --}}
    <div class="{{$open}} fixed inset-0 z-20">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="modal-bg-container fixed inset-0 bg-gray-700 bg-opacity-30"></div>
            <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>
            <div class="border-8 border-white inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all align-middle" style="width: 9cm; height: 3.5cm;">
            <!--Contenido-->

                <div class="flex justify-center mb-5 mt-6">
                    <h2 class=" text-xl font-bold">¿Está seguro que desea cancelar?</h2>
                </div>

                <div class="flex justify-center">
                    
                    <button type=button wire:click="redirigir()" class="rounded-md border border-white shadow-md 
                         bg-[#3988FF] hover:bg-blue-700 font-bold text-white py-1 mr-6  w-28">SI
                      </button>
                    <button type=button wire:click="cerrarModal()" class="rounded-md border border-white shadow-md 
                     bg-[#597AAB]  hover:bg-gray-700 font-bold text-white py-1 ml-6 w-28">NO
                    </button>       
                </div>
    
            <!--finContenido-->
            </div>
        </div>
    </div>
    {{-- --}}
</div>
