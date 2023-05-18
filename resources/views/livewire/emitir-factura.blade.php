<div class="flex flex-col">
    <div class="px-16 2xl:pr-48">
        <div class="">

                <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
                    2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                    <div class="lg:max-2xl:grid   2xl:grid  lg:grid-cols-4  xl:grid-cols-6     
                                2xl:grid-cols-7">
                            <div class="">

                                <label class="block text-black-700 text-lg font-bold font-anek">
                                    NIT/CI:<span class="text-red-900">*</span>

                                </label>
                            </div>
                            <div class="2xl:col-span-4  xl:col-span-4  lg:col-span-3 lg:pl-4">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                                id="nit/ci" type="number" placeholder="NIT/CI" wire:model="nit/ci"min="0" max="999999999"

                                oninput="javascript: if (this.value.length > 9) this.value = this.value.slice(0, 9);"

                                onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">

                            </div>
                    </div>

                    <div class="">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold w-10 font-anek" for="precio">
                                Señor(es):<span class="text-red-900">*</span>

                            </label>
                        </div>
                        <div class="">
                            <input class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                            id="señor(es)" type="text" placeholder="Señor(es)" wire:model="Señor(es)" maxlength="30">
                        </div>
                    </div>
                </div>
        </div>

        <div class=" overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg pb-2 mt-10 shrink ">
            <table class="md:table-fixed w-full font-anek">
                <thead class="h-12">
                    <tr class=" text-dark">
                        <th class="w-1/6 2xl:py-4 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Código</th>
                        <th class="w-2/6 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Nombre</th>
                        <th class="w-1/6 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Precio (Bs)</th>
                        <th class="w-1/6 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Cantidad (Ud)</th>
                        <th class="w-1/6 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-black">Total Parcial (Bs)</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="hover:bg-blue-200">
                        <td id="codigo" class="px-3 py-1 2xl:py-3 2xl:text-lg t xt-center text-ellipsis overflow-hidden"> 4565</td>

                        <td id="nombre" class=" pr-3 py-1 2xl:text-lg text-left text-ellipsis md:overflow-hidden ms:overflow-hidden  whitespace-nowrap" colspan=2>Patito 500 gr</td>

                        <td id="precio" class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">10</td>
                        
                        <td id="cantidad" class=class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden">120</td>
                    </tr>

                    <tr class="">
                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-left text-ellipsis overflow-hidden border-t border-black font-semibold" colspan=5>Total (Bs)</td>

                        <td class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-t border-black ">600</td>
                    </tr>
                </tbody>

            </table>
        </div> 
         
        <div class="flex justify-end mt-20">
        <button type=button class=" bg-[#597AAB] hover:bg-gray-700 text-white font-bold py-2 px-2 mr-8 rounded">
            CANCELAR
        </button>
        <button type="submit" class="bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">
            EMITIR FACTURA
        </button>
        </div>
    </div>
</div>