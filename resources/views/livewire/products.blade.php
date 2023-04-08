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
                            {{-- <th class="px-4 py-2 border-b-2 border-black">Editar</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class="text-center font-normal">{{$product->id}}</td>
                            <th class="text-center font-normal">
                                <a id="botonAbrir<?php echo $product->id ?>">
                                    {{$product->name_product}}</a>
                                <livewire:product.modal :product=$product>
                            </th>
                            <th class="text-center font-normal">{{$product->precio}}</th>
                            <th class="text-center font-normal">{{$product->cantidad_inventario}}</th>
                            <th class="text-center font-normal">{{$product->fecha_vencimiento}}</th>
                            <th class="text-center font-normal">{{$product->marca}}</th>
                            <th class="text-center font-normal">{{$product->category_id}}</th>
                            <td class="text-center">
                                <livewire:product.toggle-product :product="$product" :field="'estado_product'" :key="'toggle-button'.$product->id">
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
            </div>
        </div>
    </div>
</div>