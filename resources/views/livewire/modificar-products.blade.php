<div id="ventana_registrar_productos" class="flex justify-center items center h-4/5 ">
    
    <div class="bg-[#E3E9F1] xl:mx-10 my-2 lg:mx-10 md:mx-10 sm:mx-10">
        @if(session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-120 py-3 rounded relative ml:120" role="alert" 
            style="margin-left: 20px; padding-left: 28px;">
                <strong class="font-bold">{{ session('message') }}</strong>
            </div>
        @endif
        <form wire:submit.prevent="submit" class="2xl:ml-6 2xl:pr-20 2xl:pl-0 xl:ml-6 xl:pr-20 xl:pl-0 my-2  md:px-6 sm:px-4">
            <div class="mb-6 grid grid-cols-4">
                <div class="">

                    <label class="text-black-700 text-lg font-bold mx-0 w-9 font-anek" for="nombre">
                        Nombre:

                    </label>
                </div>
                <div class="col-span-3 sm:max-lg:ml-12">
                <label class="text-[#656565] text-lg mx-0 w-9 font-anek" for="nombre">
                        Nombre del producto

                    </label>
                </div>
            </div>
            <div class="mb-6 grid grid-cols-4">
                <div class="">

                    <label class="block text-black-700 text-lg font-bold mx-0 w-10 font-anek" for="descripcion">
                        Descripción:

                    </label>
                </div>
                <div class="col-span-3 sm:max-lg:ml-12">
                <label class="text-[#656565] text-lg mx-0 w-9 font-anek" for="nombre">
                        Descripción del producto

                    </label>
                </div>
            </div>
            <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
            2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                
                2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                    <div class="">

                        <label class="block text-black-700 text-lg font-bold font-anek" for="cantidad">
                            Cantidad(Ud):<span class="text-red-700">*</span>

                        </label>
                    </div>
                    <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                        id="cantidad" type="number" placeholder="Cantidad" wire:model="cantidad"min="0"
                        onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">
                        @error('cantidad') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                
                2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                lg:gap-16 md:gap-0 sm:gap-0">
                    <div class="lg:max-2xl:col-span-2 
                                2xl:col-span-2">
                        <label 

                            class="block text-black-700 text-lg font-bold 2xl:ml-36 xl:ml-32 lg:ml-20 md:ml-0 sm:ml-0 font-anek" for="categoria">
                                Categoría:


                        </label>
                    </div>


                    <div class="lg:max-2xl:col-span-2 
                                2xl:col-span-2
                                sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <label class="text-[#656565] text-lg mx-0 w-9 font-anek" for="nombre">
                            Categoria del producto

                            </label>
                    </div>
                </div>

            </div>
            <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
            2xl:grid 2xl:grid-cols-2 2xl:gap-4">
                <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                
                2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                    <div class="">

                        <label class="block text-black-700 text-lg font-bold font-anek" for="cantidad minima">
                            Cantidad Mínima(Ud)<span class="text-red-700">*</span>

                        </label>
                    </div>
                    <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                        id="cantidad minima" type="number" placeholder="Cant. min." wire:model="cantidad_minima"min="0"
                        onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">
                        @error('cantidad_minima') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                
                2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                lg:gap-16 md:gap-0 sm:gap-0">
                    <div class="lg:max-2xl:col-span-2 
                                2xl:col-span-2">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10 2xl:ml-36 xl:ml-32 lg:ml-20 md:ml-0 sm:ml-0 font-anek" for="marca">
                            Marca:


                        </label>
                    </div>
                    <div class="lg:max-2xl:col-span-2 
                                2xl:col-span-2
                                sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <label class="text-[#656565] text-lg mx-0 w-9 font-anek" for="nombre">
                            Marca del producto

                            </label>
                    </div>
                </div>

                
            </div>

            <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
            2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                
                2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                    <div class="">

                        <label class="block text-black-700 text-lg font-bold mr-1 font-anek" for="costo adquisicion">
                            Costo Adquisición(Bs)<span class="text-red-700">*</span>
                        </label>
                    </div>
                    <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] font-anek" 


                        id="costo Adquisicion" type="number" step="0.01" placeholder="Costo Adq." sm:placeholder="Costo" wire:model="adquisicion" min="0"
                        onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">
                        @error('adquisicion') <span class="error text-red-700">{{ $message }}</span> @enderror

                    </div>
                </div>


                <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                
                2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                lg:gap-16 md:gap-0 sm:gap-0">
                    <div class="lg:max-2xl:col-span-2 
                                2xl:col-span-2">
                        <label class="block text-black-700 text-lg font-bold 2xl:ml-36 xl:ml-32 lg:ml-20 w-10 font-anek" for="precio">
                            Precio(Bs)<span class="text-red-700">*</span>

                        </label>
                    </div>
                    <div class="lg:max-2xl:col-span-2 
                                2xl:col-span-2
                                sm:max-lg:col-span-3 sm:max-lg:ml-12">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                        id="precio" type="number" step="0.01" placeholder="Precio" wire:model="precio" min="0"
                        onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">
                        @error('precio') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>


                
            </div>

            <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
            2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
          

                <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                
                2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                    <div class="">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-12 font-anek" for="proveedor">
                            Proveedor:<span class="text-red-700">*</span>

                        </label>
                    </div>
                    <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                        <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] ">
                            <option value="">Seleccionar</option>
                            
                        </select>
                        @error('proveedor') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>


                <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                
                2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                lg:gap-16 md:gap-0 sm:gap-0">
                    <div class="lg:max-2xl:col-span-2 
                                2xl:col-span-2">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10 2xl:ml-36 xl:ml-32 lg:ml-20 md:ml-0 sm:ml-0 font-anek" for="fecha">
                            Fecha:

                        </label>
                    </div>
                    <div class="lg:max-2xl:col-span-2 
                                2xl:col-span-2
                                sm:max-lg:col-span-3 sm:max-lg:ml-12">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-500 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                        id="fecha" type="date" wire:model="fecha">
                        @error('fecha') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            
            <div class="grid grid-cols-4 gap-4">
                

            {{--<div class=" mb-4 ">

                    <div class="col-span-1">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10 font-anek" for="foto">
                            Foto<span class="text-red-900">*</span>

                        </label>
                    </div>
                </div> 
                <div class="col-span-2">    --}}

                    {{-- <div class="">
                        <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-500 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" accept="image/*" 
                        id="foto" name="img" type="file"  wire:model="foto" placeholder="Seleccionar">
                        @error('foto') <span class="error text-red-700">{{ $message }}</span> @enderror

                        @if ($foto)
                            <img src="{{ $foto->temporaryUrl() }}">
                        @endif
                        
                    </div> --}}


                </div>


                {{-- <div class="col-span-1  lg:gap-16 md:gap-20 sm:gap-0">
                    <div class="">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="estado">
                            Estado:

                        </label>
                    </div>
                    <div class="">
                        <label class="relative inline-flex items-center mb-4 cursor-pointer">
                            <input checked type="checkbox" value="" class="sr-only peer" wire:model="estado">
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus: ring-blue-800 dark:peer-focus:ring-blue-800 dark:bg-gray-500 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            @error('estado') <span class="error">{{ $message }}</span> @enderror   
                        </div>

                        </label>
                    </div>
                </div> --}}
            {{-- </div> --}}
            <div class="flex justify-center pt-16">
                <button type="submit" class="bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar
                </button>
                <button type=button wire:click="$emit('show-modalConfirmacion')" class=" ml-32 bg-[#597AAB] hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Cancelar
                </button>
                @livewire('modal-confirmar-cerrar')
            </div>
        </form>
    </div>
</div>