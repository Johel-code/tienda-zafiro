<div id="ventana_registrar_productos" class="flex justify-center items center h-4/5 ">
    
    <div class="bg-[#E3E9F1] mx-2 my-2 md:ml-28 sm:ml-24 sm:mr-0">
        @if(session()->has('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-2 py-3 rounded relative" role="alert">
                <strong class="font-bold">{{ session('message') }}</strong>
            </div>
        @endif
        <form wire:submit.prevent="submit" class="px-10 mx-1 my-2 lg:ml-60 md:px-6">
            <div class="mb-4 grid grid-cols-4">
                <div class="">
                    <label class="text-black-700 text-lg font-bold mx-0 w-9" for="nombre">
                        Nombres<span class="text-red-900">*</span>
                    </label>
                </div>
                <div class="col-span-3">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                    id="nombre" type="text" placeholder="Nombre del producto" wire:model="nombre">
                    @error('nombre') <span class="error text-red-700">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="mb-4 grid grid-cols-4">
                <div class="">
                    <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="descripcion">
                        Descripción
                    </label>
                </div>
                <div class="col-span-3">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                    id="descripcion" type="text" placeholder="Descripción del producto" wire:model="descripcion">
                    @error('descripcion') <span class="error text-red-700">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4 grid grid-cols-2 gap-2">
                    <div class="">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="cantidad">
                            Cantidad<span class="text-red-900">*</span>
                        </label>
                    </div>
                    <div class="">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                        id="cantidad" type="number" placeholder="Cantidad del producto" wire:model="cantidad">
                        @error('cantidad') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-4 grid grid-cols-4 gap-4 lg:gap-16 md:gap-20 sm:gap-0">
                    <div class="sm:col-span-2">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="precio">
                            Precio<span class="text-red-900">*</span>
                        </label>
                    </div>
                    <div class="col-span-2">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                        id="precio" type="number" step="0.01" placeholder="Precio del producto" wire:model="precio">
                        @error('precio') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4 grid grid-cols-2 gap-2">
                    <div class="">
                        <label class="block text-black-700 text-lg font-bold" for="cantidad minima">
                            Cantidad Mínima<span class="text-red-900">*</span>
                        </label>
                    </div>
                    <div class="">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                        id="cantidad minima" type="number" placeholder="Cantidad min. producto" wire:model="cantidad_minima">
                        @error('cantidad_minima') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mb-4 grid grid-cols-4 gap-4 lg:gap-16 md:gap-20 sm:gap-0">
                    <div class="sm:col-span-2">
                        <label 
                            class="block text-black-700 text-lg font-bold" for="categoria">
                                Categoría<span class="text-red-900">*</span>

                        </label>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <select id="categoria_id" wire:model="categoria" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] ">
                        
                            <option value="">Seleccione una categ.</option>

                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->name_categoy }}</option>
                            @endforeach
                        </select>
                        @error('categoria') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="mb-4 grid grid-cols-2 gap-2">
                    <div class="">
                        <label class="block text-black-700 text-lg font-bold mr-1" for="costo adquisicion">
                            Costo Adquisición<span class="text-red-900">*</span>
                        </label>
                    </div>
                    <div class="">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 

                        id="costo Adquisicion" type="number" step="0.01" placeholder="Costo Adquisición" sm:placeholder="Costo" wire:model="adquisicion">
                        @error('adquisicion') <span class="error text-red-700">{{ $message }}</span> @enderror

                    </div>
                </div>

                <div class="mb-4 grid grid-cols-4 gap-4 lg:gap-16 md:gap-20 sm:gap-0">
                    <div class="sm:col-span-2">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="marca">
                            Marca<span class="text-red-900">*</span>

                        </label>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                        id="marca" type="text" placeholder="Marca del producto" wire:model="marca">
                        @error('marca') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
          
                <div class="mb-4 grid grid-cols-4 gap-2">
                    <div class="col-span-2">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="proveedor">
                            Proveedor<span class="text-red-900">*</span>
                        </label>
                    </div>
                    <div class="col-span-2">
                        <select id="proveedor_id" wire:model="proveedor" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] ">
                            <option value="">Seleccione un prov.</option>
                            @foreach($proveedors as $proveedor)
                                <option value="{{ $proveedor->id }}">{{ $proveedor->name_provider}}</option>
                            @endforeach
                        </select>
                        @error('proveedor') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-4 gap-4 lg:gap-16 md:gap-20 sm:gap-0">
                    <div class="sm:col-span-2">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="fecha">
                            Fecha
                        </label>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-500 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                        id="fecha" type="date" wire:model="fecha">
                        @error('fecha') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                

                <div class="mb-4 grid grid-cols-4 gap-2">
                    <div class="col-span-2">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="foto">
                            Foto<span class="text-red-900">*</span>

                        </label>
                    </div>
                    

                    <div class="col-span-2">
                        <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-500 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" accept="image/*" 
                        id="foto" type="file" wire:model="foto">
                        @error('foto') <span class="error text-red-700">{{ $message }}</span> @enderror

                        @if ($foto)
                            <img src="{{ $foto->temporaryUrl() }}">
                        @endif
                    </div>

                </div>

                {{-- <div class="mb-4 grid grid-cols-4 gap-4 lg:gap-16 md:gap-20 sm:gap-0">
                    <div class="sm:col-span-2">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="estado">
                            Estado:

                        </label>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label class="relative inline-flex items-center mb-4 cursor-pointer">
                            <input checked type="checkbox" value="" class="sr-only peer" wire:model="estado">
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus: ring-blue-800 dark:peer-focus:ring-blue-800 dark:bg-gray-500 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            @error('estado') <span class="error">{{ $message }}</span> @enderror   
                        </div>

                        </label>
                    </div>
                </div> --}}
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar
                </button>
                <button type=button wire:click="limpiar()" class=" ml-32 bg-[#597AAB] hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Cancelar
                </button>
            </div>
        </form>
    </div>
</div>
