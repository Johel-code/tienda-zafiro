
<div class="flex flex-col">
    <div class="px-16 2xl:pr-48">
        <div class="">

                <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
                    2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                    <div class="lg:max-2xl:grid   2xl:grid  lg:grid-cols-4  xl:grid-cols-6     
                                2xl:grid-cols-7">
                            <div class="">

                                <label class="block text-black-700 text-lg font-bold font-anek">
                                    NIT/CI:

                                </label>
                            </div>
                            <div class="2xl:col-span-4  xl:col-span-4  lg:col-span-3 lg:pl-4">
                                <input wire:model="nit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                                id="nit/ci" type="number" placeholder="Escriba aquí el NIT o CI" min="0" max="999999999"

                                oninput="javascript: if (this.value.length > 9) this.value = this.value.slice(0, 9);"

                                onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">
                                @error('nit') <span class="error text-red-700">{{ $message }}</span> @enderror

                            </div>
                    </div>

                    <div class="lg:max-2xl:grid   2xl:grid  lg:grid-cols-5  xl:grid-cols-6     
                                2xl:grid-cols-7">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold w-10 font-anek" for="precio">
                                Señor(es):

                            </label>
                        </div>
                        <div class="2xl:col-span-6  xl:col-span-5  lg:col-span-4 lg:pl-4 lg:pr-0 lg:pl-8 ">
                            <input class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                            id="señor(es)" type="text" placeholder="Escriba aquí la razón social o el nombre" wire:model="cliente" maxlength="50">
                            @error('cliente') <span class="error text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
        </div>

        <div class=" overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg pb-2 mt-10 shrink ">
            <table class="md:table-fixed w-full font-anek">
                <thead class="h-12">
                    <tr class=" text-dark">
                        <th class="2xl:py-4 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Código</th>
                        <th class="2xl:text-lg text-left text-ellipsis overflow-hidden border-b border-black" colspan=2>Nombre</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Precio (Bs)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Cantidad (Ud)</th>
                        <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Total Parcial (Bs)</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($datos as $dato)
                    <tr class="cursor-pointer">
                        <td class="px-3 py-1 2xl:py-3 2xl:text-lg text-center text-ellipsis overflow-hidden"> 
                            {{ $dato['codigo'] }}
                        </td>

                        <td class=" pr-3 py-1 2xl:text-lg text-left text-ellipsis md:overflow-hidden ms:overflow-hidden  whitespace-nowrap" colspan=2>
                            {{ $dato['nombre'] }}
                        </td>

                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">
                            {{ $dato['precio'] }}
                        </td>
                        
                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">
                            {{ $dato['cantidad'] }}
                        </td>

                        <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">
                            {{ $dato['precio']*$dato['cantidad'] }}
                        </td>
                    </tr>
                    @endforeach

                    <tr class="">
                    @error('datos') <span class="error text-red-700">{{ $message }}</span> @enderror
                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-left text-ellipsis overflow-hidden border-t border-black font-semibold" colspan=5>Total (Bs)</td>

                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-t border-black ">
                            {{ $suma }}
                        </td>
                    </tr>

                    <tr class="">
                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-left text-ellipsis overflow-hidden border-t border-black font-semibold" colspan=5>Importe pagado (Bs)</td>

                        <td class="border-t border-black pr-0 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">
                            <input id="importePagado" class="px-1 shadow appearance-none border rounded 2xl:w-3/4 sm:w-full py-2 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] text-center" id="importePagado" type="number" step="1" placeholder="Importe Pagado" min= '1' onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false" >
                        </td>
                    </tr>

                    <tr class="">
                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-left text-ellipsis overflow-hidden border-t border-black font-semibold" colspan=5>Importe devuelto (Bs)</td>

                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-t border-black ">
                            <p>000</p>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div> 
         
        <div class="flex justify-end mt-20">
        <button type=button wire:click.prevent="redirigir()" class=" bg-[#597AAB] hover:bg-gray-700 text-white font-bold py-2 px-2 mr-8 rounded">
            VOLVER
        </button>
        <button wire:click.prevent="submit()" type="submit" class="bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">
            EMITIR FACTURA
        </button>
        </div>
    </div>
</div>

