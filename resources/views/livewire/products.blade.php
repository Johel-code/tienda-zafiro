<div>
    <div>
        <div class="relative bottom-10 w-80 ml-96 left-80 pl-48">
            <input wire:model="search" type="search"  class=" p-2.5 w-80 z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border-l-gray-300 border border-gray-300 focus:ring-gray-300 focus:border-gray-300" placeholder="Buscar">
            <button type="submit" class="absolute top-0 left-96 ml-20 pl-4 p-2.5 bg-gray-50 rounded-r-lg border border-gray-300 hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-300">
                <svg class="w-5 h-5" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>
        </div>
        <div class="py-2"></div>        
        <div class="sm:px-8 lg:px-8 md:ml-64">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4 md:shrink">
                <table class="table-fixed w-full">
                    <thead class="py-8">
                        <tr class="bg-white text-dark">
                             <div>
                                <div>

                                    @if (!empty($search))
                                        @if ($products->count() > 0)
                                            <div class="bg-green-100 border border-green-400 text-green-700 px-2 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">Se encontraron {{ $products->total() }} resultados</strong>
                                            </div>
                                        @else
                                            <div class="bg-red-100 border border-red-400 text-red-700 px-2 py-3 rounded relative" role="alert">
                                                <strong class="font-bold">No se encontraron resultados</strong>
                                            </div>
                                        @endif
                                    @endif
                                    
                                </div>
                            </div>
                            <th class="px-4 py-2 border-b-2 border-black">Código</th>
                            <th class="px-4 py-2 border-b-2 border-black">Nombre</th>
                            <th class="px-4 py-2 border-b-2 border-black">Precio</th>
                            <th class="px-4 py-2 border-b-2 border-black">Cantidad</th>
                            <th class="px-4 py-2 border-b-2 border-black">Fecha vencimiento</th>
                            <th class="px-4 py-2 border-b-2 border-black">Marca</th>
                            <th class="px-4 py-2 border-b-2 border-black">Categoría</th>
                            <th class="px-4 py-2 border-b-2 border-black">Estado</th>
                            {{-- <th class="px-4 py-2 border-b-2 border-black">Editar</th> --}}  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <th class="text-center font-normal">{{$product->codigo}}</th>
                            <th class="text-center font-normal">{{$product->name_product}}</th>
                            <th class="text-center font-normal">{{$product->precio}}</th>
                            <th class="text-center font-normal">{{$product->cantidad_inventario}}</th>
                            <th class="text-center font-normal">{{ date('d/m/Y', strtotime($product->fecha_vencimiento)) }}</th>
                            <th class="text-center font-normal">{{$product->marca}}</th>
                            <th class="text-center font-normal">{{$product->category_id}}</th>
                            <td class="text-center">
                                <livewire:product.toggle-product :product="$product" :field="'estado_product'"
                                :key="'toggle-button'.$product->id">
                            </td>
                            {{-- <td class="text-center">
                                <a href="dashboard">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-28 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </td> --}}
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>