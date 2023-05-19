<div id="ventas-pre-factura" class="flex justify-center items center">

    <div class="px-16 pt-4 w-full">

        <div class="grid grid-cols-7 pb-20">

            <div id="buscador" class="col-span-4">
                <input wire:model="search" type="search"  class=" p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border-none  focus:ring-gray-300 focus:border-gray-300" placeholder="Buscar">
                {{-- <button type="submit" class="absolute top-0 left-96 ml-20 pl-4 p-2.5 bg-gray-50 rounded-r-lg border border-gray-300 hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button> --}}
            </div>

            <div id="cantidad" class="col-span-2 mx-8">
                <input class="shadow appearance-none border rounded w-full py-2 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 

                id="cantidad" type="number" step="1" placeholder="Cantidad" maxlength="12" min= '0' max='9999999999.99'
                oninput="javascript:if (this.value.includes('.')) { if (this.value.split('.')[1].length > 2) 
                {this.value = parseFloat(this.value).toFixed(2);}} else if (this.value.length > 10) {this.value = this.value.slice(0, 10);}"
                onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">
                
            </div>

            <div id="boton-añadir">
                <button type="submit" class="bg-[#3988FF]
                    hover:bg-blue-700 text-white font-bold py-2 px-8    rounded">
                    AÑADIR
                </button>
            </div>
        </div>

        <div id="canasta">
            <table class="md:table-fixed w-full font-anek">
                <thead class="h-12">
                    <tr class="text-dark">
                        <th class="2xl:py-4 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Código</th>
                        <th class="2xl:text-lg text-left text-ellipsis overflow-hidden border-b border-black" colspan=2>Nombre</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Precio (Bs)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Cantidad (Ud)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Total Parcial (Bs)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Quitar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-blue-200">
                        <td id="codigo" class="px-3 py-1 2xl:py-3 2xl:text-lg t xt-center text-ellipsis overflow-hidden"> 4565
                        </td>

                        <td id="nombre" class=" pr-3 py-1 2xl:text-lg text-left text-ellipsis md:overflow-hidden ms:overflow-hidden  whitespace-nowrap" colspan=2>Patito 500 gr
                        </td>

                        <td id="precio" class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">10</td>
                        
                        <td  class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">
                            <input id="cantidad_{{ $index }}" class="shadow appearance-none border rounded w-3/4 py-2 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" id="cantidad" type="number" step="1" placeholder="Cantidad" maxlength="2" min= '1' max='50' oninput="javascript:if (this.value.length > 2) {this.value = this.value.slice(0, 2);}" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false" 
                            wire:model.lazy="datos.{{ $index }}.cantidad" wire:change.lazy="actualizarCantidad($index)">
                            @error('datos.'.$index.'.cantidad') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </td>

                        <td id="total-parcial" class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">120</td>

                        <td id="quitar" class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden text-red-600"><button type="button" class="delete-row-button">Quitar</button></td>
                    </tr>

                    <tr class="">
                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-left text-ellipsis overflow-hidden border-t border-black font-semibold" colspan=6>Total (Bs)</td>

                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-t border-black ">600</td>
                    </tr>
                </tbody>
                
            </table>
            @error('datos') <strong class="error text-red-700 font-anek block text-center">{{ $message }}</strong> @enderror
            <tr class="">
                <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-left text-ellipsis overflow-hidden border-t border-black font-semibold" colspan=6>Total (Bs):</td>

                <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-t border-black ">{{ $this->total() }}</td>
            </tr>

        </div>

        <div id="botones-cancelar-continuar" class="flex justify-end mt-20">
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
