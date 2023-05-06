<div>
    <div class="sm:px-8">
        <div class="bg-white overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg pb-2 shrink">
                <table class="md:table-fixed w-full font-anek">
                    <thead class="h-12">
                        <tr class="bg-white text-dark">
                            <th class="2xl:py-4 2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Código</th>
                            <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Nombre</th>
                            <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Precio (Bs)</th>
                            <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Cantidad (Ud)</th>
                            <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Fecha vencimiento</th>
                            <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Marca</th>
                            <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Categoría</th>
                            <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Estado</th>
                            <th class="2xl:text-lg border-b-2 border-black">Editar</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productsDesac as $product)
                        <tr class="hover:bg-blue-200">
                            <td class="px-3 py-1 2xl:py-3 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">{{$product->codigo}}</th>

                            <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis md:overflow-hidden ms:overflow-hidden  border-b border-gray-400">
                                <a class="hover:text-blue-700 hover:underline" id="botonAbrir<?php echo $product->id ?>" style="cursor:pointer;">
                                    {{$product->name_product}}
                                </a>
                                <livewire:product.modal :product=$product :key="'modal'.$product->id">
                            </th>

                            <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">{{$product->precio}}</th>
                            <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">{{$product->cantidad_inventario}}</th>
                            <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">@if($product->fecha_vencimiento) {{date('d/m/Y', strtotime($product->fecha_vencimiento))}} @else Sin Vencimiento @endif</th>
                            <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">{{$product->marca}}</th>
                            <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">{{$category[$product->category_id-1]->name_categoy}}</th>
                            <td class="pr-3 py-1 2xl:text-lg text-center  border-b border-gray-400">
                                <livewire:product.toggle-product2 :product="$product" :field="'estado_product'"
                                :key="'toggle-button'.$product->id">
                            </td>
                            <td class="pr-3 py-1 2xl:text-lg text-center border-b border-gray-400">
                                <a href="{{ url('modificar-producto', $product->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="2.5" stroke="#3391d6" class="w-6 h-6 m-auto block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$productsDesac->links()}}
        </div>
    </div>
</div>
