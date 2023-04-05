<div>
    <div>
        <div class="py-2"></div>
        <div class="sm:px-8 lg:px-8 md:ml-64">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4 md:shrink">
                <table class="table-fixed w-full">
                    <thead class="py-8">
                        <tr class="bg-white text-dark">
                            <th class="px-4 py-2 border-b-2 border-black">Codigo</th>
                            <th class="px-4 py-2 border-b-2 border-black">Nombre</th>
                            <th class="px-4 py-2 border-b-2 border-black">Precio</th>
                            <th class="px-4 py-2 border-b-2 border-black">Cantidad</th>
                            <th class="px-4 py-2 border-b-2 border-black">Fecha vencimiento</th>
                            <th class="px-4 py-2 border-b-2 border-black">Marca</th>
                            <th class="px-4 py-2 border-b-2 border-black">Categoria</th>
                            <th class="px-4 py-2 border-b-2 border-black">Estado</th>
                            <th class="px-4 py-2 border-b-2 border-black">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <th class="text-center font-normal">{{$product->id}}</th>
                            <th class="text-center font-normal">{{$product->name_product}}</th>
                            <th class="text-center font-normal">{{$product->precio}}</th>
                            <th class="text-center font-normal">{{$product->cantidad_inventario}}</th>
                            <th class="text-center font-normal">{{$product->fecha_vencimiento}}</th>
                            <th class="text-center font-normal">{{$product->marca}}</th>
                            <th class="text-center font-normal">{{$product->category_id}}</th>
                            <td class="text-center">
                                <label class="relative inline-flex items-center cursor-pointer items-center">
                                    @if($product->estado_product)
                                    <input type="checkbox" value="" class="sr-only peer" checked wire:click="editEstado({{$product->id}},{{$product->estado_product}})">
                                    @else(
                                    <input type="checkbox" value="" class="sr-only peer" wire:click="editEstado({{$product->id}},{{$product->estado_produt}})">
                                    )
                                    @endif
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-3 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </td>
                            <td class="text-center"><a href="dashboard"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center">ola</td>
                            <td class="text-center">25</td>
                            <td class="text-center">10</td>
                            <td class="text-center">unilever</td>
                            <td class="text-center">12-04-26</td>
                            <td class="text-center">
                                <label class="relative inline-flex items-center cursor-pointer items-center">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-3 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </td>
                            <td class="text-center"><a href="dashboard"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>