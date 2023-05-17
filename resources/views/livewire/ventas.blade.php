<div id="ventas-pre-factura" class="flex justify-center items center">

    <div class="px-16 w-full">
        
        <div class="grid grid-cols-3">
            <div id="buscador" class="flex sm:mr-8">
                <input wire:model="search" type="search"  class=" p-2.5 w-80 md:w-56 text-sm text-gray-900 bg-gray-50 rounded-lg border-l-gray-300 border border-gray-300 focus:ring-gray-300 focus:border-gray-300" placeholder="Buscar">
                {{-- <button type="submit" class="absolute top-0 left-96 ml-20 pl-4 p-2.5 bg-gray-50 rounded-r-lg border border-gray-300 hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button> --}}
            </div>

            <div id="cantidad" class="">
                <input class="shadow appearance-none border rounded w-full py-2 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 

                id="cantidad" type="number" step="1" placeholder="Cantidad" maxlength="12" min= '0' max='9999999999.99'
                oninput="javascript:if (this.value.includes('.')) { if (this.value.split('.')[1].length > 2) 
                {this.value = parseFloat(this.value).toFixed(2);}} else if (this.value.length > 10) {this.value = this.value.slice(0, 10);}"
                onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">
                
            </div>

            <div id="boton-añadir">
                <button type="submit" class="bg-[#3988FF]
                    hover:bg-blue-700 text-white font-bold py-2 px-4    rounded">
                    AÑADIR
                </button>
            </div>
        </div>

        <div id="canasta">
            <table class="md:table-fixed w-full font-anek">
                <thead class="h-12">
                    <tr class="bg-white text-dark">
                        <th class="2xl:py-4 2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Código</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Nombre</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Precio (Bs)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Cantidad (Ud)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Total Parcial (Bs)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Quitar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-blue-200">
                        <td class="cursor-pointer px-3 py-1 2xl:py-3 2xl:text-lg t xt-center text-ellipsis overflow-hidden border-b border-gray-400"> 4565
                        </td>

                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis md:overflow-hidden ms:overflow-hidden  border-b border-gray-400   whitespace-nowrap">Patito 500 gr
                        </td>

                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">10</td>
                        
                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">12</td>

                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">120</td>

                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">Quitar</td>
                    </tr>

                    <tr>
                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">Total</td>

                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">600</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="botones-cancelar-continuar">
            <button type=button class=" ml-32 bg-[#597AAB] hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                CANCELAR
            </button>
            <button type="submit" class="bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                CONTINUAR
            </button>
        </div>
    </div>
    
</div>
