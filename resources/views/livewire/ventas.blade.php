<div id="ventas-pre-factura" class="flex justify-center items center">

    <div class="px-16 w-full md:px-10 sm:px-8">

        <div class="sm:grid sm:grid-cols-1 
                    lg:grid lg:grid-cols-3 
                    xl:grid xl:grid-cols-3
                    2xl:grid 2xl:grid-cols-3
                    pb-20">

            <div id="buscador" class="pr-20 lg:pr-12 sm:pr-0 md:pr-0">
                <input wire:model="search" type="search"  class=" p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border-none  focus:ring-gray-300 focus:border-gray-300" placeholder="Buscar producto" maxlength="50" 
                oninput="this.value = this.value.replace(/[^a-zA-Z0-9ñÑáéíóúÁÉÍÓÚüÜ ]/g, '')">
                {{-- <button type="submit" class="absolute top-0 left-96 ml-20 pl-4 p-2.5 bg-gray-50 rounded-r-lg border border-gray-300 hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button> --}}
                
            </div>
            <div class="max-h-[200px] overflow-y-auto col-span-2">
                    <table class="md:table-fixed w-full font-anek">
                        <thead class="bg-[#D9D9D9] max-h-[400px] overflow-y-auto">
                            @if (!empty($search))
                                @if ($products->count() > 0)
                                    <tr>
                                        <th class="px-4 py-2 text-left">Código</th>
                                        <th class="px-4 py-2 text-left">Nombre</th>
                                        <th class="px-4 py-2 text-left">Precio(Bs)</th>
                                        <th class="px-4 py-2 text-left">Marca</th>
                                    </tr>
                                    @foreach($products as $product)
                                        <tr class="hover:bg-gray-100"  wire:click="agregar('{{ $product->id }}', '{{ $product->codigo }}')">
                                            <td class="px-4 py-2 cursor-pointer">{{ $product->codigo }}</td>
                                            <td class="px-4 py-2 cursor-pointer">{{ $product->name_product }}</td>
                                            <td class="px-4 py-2 cursor-pointer">{{ $product->precio }}</td>
                                            <td class="px-4 py-2 cursor-pointer">{{ $product->marca }}</td>
                                        </tr>
                                    @endforeach
                                
                                @else
                                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3">
                                        <strong class="font-bold">No se encontraron resultados</strong>
                                    </div>
                                @endif
                            @endif
                    </table>
            </div>
        </div>


        <div id="canasta">
            <table class=" w-full font-anek">
                <thead class="h-12">
                    <tr class="text-dark">
                        <th class="2xl:py-4 2xl:text-lg text-left pl-2 text-ellipsis overflow-hidden border-b border-black">Código</th>
                        <th class="2xl:text-lg text-left text-ellipsis overflow-hidden border-b border-black" colspan=2 sm:colspan=1 md:colspan=1>Nombre</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Precio (Bs)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Cantidad (Ud)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Total Parcial (Bs)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">      </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datos as $index => $dato)
                    <tr class="hover:bg-blue-200">
                        <td  class="px-3 py-1 2xl:py-3 2xl:text-lg t xt-center text-ellipsis overflow-hidden"> {{ $dato['codigo'] }}
                        </td>

                        <td  class=" pr-3 py-1 2xl:text-lg text-left text-ellipsis md:overflow-hidden ms:overflow-hidden  whitespace-nowrap" colspan=2>{{ $dato['nombre'] }}
                        </td>

                        <td  class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">{{ $dato['precio'] }}</td>
                        
                        <td  class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">
                            <input id="cantidad_{{ $index }}" class="shadow appearance-none border rounded w-3/4 py-2 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] text-center" id="cantidad" type="number" step="1" placeholder="Cantidad" maxlength="2" min= '1' max='50' oninput="javascript:if (this.value.length > 2) {this.value = this.value.slice(0, 2);}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false" 
                            wire:model.lazy="datos.{{ $index }}.cantidad" wire:change="actualizarCantidad({{ $index }}, $event.target.value)">
                            @error('datos.'.$index.'.cantidad')<div class="error text-red-700 font-anek block text-center">{{ $message }}</div>@enderror
                        </td>

                        <td  class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">{{ $dato['cantidad'] * $dato['precio'] }}</td>

                        <td  class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden text-red-600"><button type="button" class="delete-row-button" wire:click="quitar({{ $index }})">Quitar</button></td>
                    </tr>
                    @endforeach
                    
                    @error('datos') <strong class="error text-red-700 font-anek block text-center">{{ $message }}</strong> @enderror
                    <tr class="border-t border-black">
                        <td class="" colspan=3></td>

                        <td class="cursor-pointer pr-3 pl-10 py-1 2xl:text-lg text-left text-ellipsis overflow-hidden border-t border-black font-semibold" colspan=2>Total (Bs)</td>

                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-t border-black ">{{ $this->total() }}</td>
                     </tr>
                </tbody>
                
            </table>
            
        </div>
        
        <div id="botones-cancelar-continuar" class="flex justify-end mt-20 mb-20">
            <button type=button wire:click="$emit('show-modalConfirmacion')"class="bg-[#597AAB] hover:bg-gray-700 text-white font-bold py-2 px-2 mr-8 rounded">
                CANCELAR
            </button>
            <button type="submit" wire:click="redirigir"class="bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">
                CONTINUAR
            </button>
        </div>
        @livewire('modal-cerrar-ventas')
    </div>
    
</div>
