    <div id="ventana_registrar_productos" class="flex justify-center items-center h-4/5  ml-0    right-0 mt-10 ">
        <div class="bg-[#E3E9F1] px-10 pl-48 ml-20">
    <div class="relative w-80 ml-96 left-96 pl-40">
            <input type="search"  class=" p-2.5 w-80 z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border-l-gray-300 border border-gray-300 focus:ring-gray-300 focus:border-gray-300" placeholder="Buscar">
            <button type="submit" class="absolute top-0 left-96 ml-14 p-2.5 bg-gray-50 rounded-r-lg border border-gray-300 hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-300">
                <svg class="w-5 h-5" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>
        </div>
            <form class="px-20 mx-20 mb-10 ">
                <div class="mb-4 grid grid-cols-4 gap-4">
                    <div class="">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="nombre">
                            Nombre:
                        </label>
                    </div>
                    <div class="col-span-3">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" id="nombre" type="text" placeholder="Nombre del producto">
                    </div>
                </div>
                <div class="mb-4 grid grid-cols-4 gap-4">
                    <div class="">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="descripcion">
                            Descripción:
                        </label>
                    </div>
                    <div class="col-span-3">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" id="descripcion" type="text" placeholder="Descripción del producto">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="cantidad">
                                Cantidad:
                            </label>
                        </div>
                        <div class="">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " id="cantidad" type="number" placeholder="Cantidad del producto">
                        </div>
                    </div>
                    <div class="mb-4 grid grid-cols-4 gap-4">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="precio">
                                Precio:
                            </label>
                        </div>
                        <div class="col-span-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" id="precio" type="number" placeholder="Precio del producto">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="marca">
                                Marca:
                            </label>
                        </div>
                        <div class="">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " id="marca" type="text" placeholder="Marca del producto">
                        </div>
                    </div>
                    <div class="mb-4 grid grid-cols-4 gap-4">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="categoria">
                                Categoría:
                            </label>
                        </div>
                        <div class="col-span-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" id="categoria" type="text" placeholder="Categoría del producto">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="fecha">
                                Fecha:
                            </label>
                        </div>
                        <div class="">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-500 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " id="fecha" type="date">
                        </div>
                    </div>
                    <div class="mb-4 grid grid-cols-4 gap-4">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="estado">
                                Estado:
                            </label>
                        </div>
                        <div class="col-span-3">
                            <label class="relative inline-flex items-center mb-4 cursor-pointer">
                                <input checked type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus: ring-blue-800 dark:peer-focus:ring-blue-800 dark:bg-gray-500 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>

                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-4">
                    <div class="">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="foto">
                            Foto:
                        </label>
                    </div>
                    <div class="col-span-2">
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " id="foto" type="file">
                    </div>
                </div>

            </form>
        </div>
    </div>
    <div class="flex justify-center ml-24">
        <button class="ml-64 bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Guardar
        </button>
        <button class=" ml-32 bg-[#597AAB] hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Cancelar
        </button>
    </div>

