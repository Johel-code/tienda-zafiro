<div class="flex flex-col">
    <div>
        <form wire:submit.prevent="submit" class="2xl:ml-6 2xl:pr-20 2xl:pl-0 xl:ml-6 xl:pr-20 xl:pl-0 my-2  md:px-6 sm:px-4">

            <div class="ml-12 lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
                2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                        <div class="">

                            <label class="block text-black-700 text-lg font-bold font-anek">
                                NIT/CI:<span class="text-red-900">*</span>

                            </label>
                        </div>
                        <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                            id="nit/ci" type="number" placeholder="NIT/CI" wire:model="nit/ci"min="0" max="999999999"

                            oninput="javascript: if (this.value.length > 9) this.value = this.value.slice(0, 9);"

                            onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">

                        </div>
                </div>

                <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                    lg:gap-16 md:gap-0 sm:gap-0">
                    <div class="lg:max-2xl:col-span-2 
                                2xl:col-span-2">
                        <label class="block text-black-700 text-lg font-bold 2xl:ml-36 xl:ml-32 lg:ml-20 w-10 font-anek" for="precio">
                            Señor(es):<span class="text-red-900">*</span>

                        </label>
                    </div>
                    <div class="lg:max-2xl:col-span-2 
                                2xl:col-span-2
                                sm:max-lg:col-span-3 sm:max-lg:ml-12">
                        <input class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                        id="señor(es)" type="text" placeholder="Señor(es)" wire:model="Señor(es)" maxlength="30">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="bg-white overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg pb-2 shrink ml-16 mr-20">
        <table class="md:table-fixed w-full font-anek">
            <thead class="h-12">
                <tr class="bg-white text-dark">
                    <th class="w-1/6 2xl:py-4 2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Código</th>
                    <th class="w-2/6 2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Nombre</th>
                    <th class="w-1/6 2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Precio (Bs)</th>
                    <th class="w-1/6 2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Cantidad (Ud)</th>
                    <th class="w-1/6 2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Total Parcial (Bs)</th>
                </tr>
            </thead>
        </table>
    </div> 

    <div class="bg-white overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg pb-2 shrink ml-16 mr-20">
        <table class="md:table-fixed w-full font-anek">
            <thead class="h-12">
                <tr class="bg-white text-dark">
                    <th class="2xl:py-4 2xl:text-lg text-start text-ellipsis overflow-hidden border-t-2 border-black">Total (B):</th>
                </tr>
            </thead>
        </table>
    </div> 
</div>
