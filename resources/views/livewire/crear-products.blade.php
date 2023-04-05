    <div id="ventana_registrar_productos" class="flex justify-center items-center h-4/5  ml-0    right-0 mt-10 ">
        <div class="bg-[#E3E9F1] px-10 pl-48 pb-8 mb-10 ml-20">
            
            <form class="px-20 pb-8 mx-20 mb-10 ">
                <div class="mb-4 grid grid-cols-4 gap-4">
                    <div class="">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="nombre">
                            Nombre:
                        </label>
                    </div>
                    <div class="col-span-3">
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]"
                            id="nombre" type="text" placeholder="Nombre del producto">
                    </div>
                </div>
                <div class="mb-4 grid grid-cols-4 gap-4">
                    <div class="">
                        <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="descripcion">
                            Descripción:
                        </label>
                    </div>
                    <div class="col-span-3">
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]"
                            id="descripcion" type="text" placeholder="Descripción del producto">
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
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] "
                                id="cantidad" type="number" placeholder="Cantidad del producto">
                        </div>
                    </div>
                    <div class="mb-4 grid grid-cols-4 gap-4">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="precio">
                                Precio:
                            </label>
                        </div>
                        <div class="col-span-3">
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]"
                                id="precio" type="number" placeholder="Precio del producto">
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
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] "
                                id="marca" type="text" placeholder="Marca del producto">
                        </div>
                    </div>
                    <div class="mb-4 grid grid-cols-4 gap-4">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold mx-0 w-10" for="categoria">
                                Categoría:
                            </label>
                        </div>
                        <div class="col-span-3">
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]"
                                id="categoria" type="text" placeholder="Categoría del producto">
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
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-500 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] "
                                id="fecha" type="date">
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
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus: ring-blue-800 dark:peer-focus:ring-blue-800 dark:bg-gray-500 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
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
                        <input
                            class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] "
                            id="foto" type="file">
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
