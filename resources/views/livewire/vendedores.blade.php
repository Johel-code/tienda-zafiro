<div>
    
    <div class="lg:ml-12 md:ml-8 sm:ml-8">
        <a href="/crear-personal">
            <button class=" bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                AÑADIR
            </button>
        </a>
    </div>    

    <div class="py-1.5"></div>
 {{----------------------------Tabla vendedores habilidados--------------------------------}}
    <div class="sm:px-8 lg:px-12">
        <div class="bg-white overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg 2xl:py-2 shrink">
            <table class="md:table-fixed w-full font-anek">
                <thead class="md:py-8">
                    <tr class="bg-white text-dark">      
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Nombre</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Apellido</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">CI</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Dirección</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Correo</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Celular</th>
                        <th class=" py-0 text-center text-ellipsis overflow-hidden border-b-2 border-black">Fecha de Nacimiento</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Estado</th>  
                    </tr>
                </thead>
                <tbody>
                    {{--@foreach($products as $product)--}}


                    <tr class="hover:bg-blue-200">
                        <td class="pl-4 pr-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">cristian{{--$product->codigo--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">Heredia Suaznabar{{--$product->name_product--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">14164143{{--$product->precio--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">av.circunvalacion k5 hacia sacaba{{--$product->cantidad_inventario--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">mgregory@gmail.com{{-- date('d/m/Y', strtotime($product->fecha_vencimiento)) --}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">68475821{{--$product->marca--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">05/01/1999{{--$category[$product->category_id-1]->name_categoy--}}</th>
                        <td class="pl-2 pr-4 py-1.5 2xl:py-2.5 text-center  border-b border-gray-400">

                            {{--<livewire:product.toggle-product :product="$product" :field="'estado_product'"
                            :key="'toggle-button'.$product->id">--}}
                        </td>
                    </tr>
                    <tr class="hover:bg-blue-200">
                        <td class="pl-4 pr-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">cristian{{--$product->codigo--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">Heredia Suaznabar{{--$product->name_product--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">14164143{{--$product->precio--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">av.circunvalacion k5 hacia sacaba{{--$product->cantidad_inventario--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">mgregory@gmail.com{{-- date('d/m/Y', strtotime($product->fecha_vencimiento)) --}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">68475821{{--$product->marca--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">05/01/1999{{--$category[$product->category_id-1]->name_categoy--}}</th>
                        <td class="pl-2 pr-4 py-1.5 2xl:py-2.5 text-center  border-b border-gray-400">

                            {{--<livewire:product.toggle-product :product="$product" :field="'estado_product'"
                            :key="'toggle-button'.$product->id">--}}
                        </td>
                    </tr>
                    <tr class="hover:bg-blue-200">
                        <td class="pl-4 pr-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">cristian{{--$product->codigo--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">Heredia Suaznabar{{--$product->name_product--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">14164143{{--$product->precio--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">av.circunvalacion k5 hacia sacaba{{--$product->cantidad_inventario--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">mgregory@gmail.com{{-- date('d/m/Y', strtotime($product->fecha_vencimiento)) --}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">68475821{{--$product->marca--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">05/01/1999{{--$category[$product->category_id-1]->name_categoy--}}</th>
                        <td class="pl-2 pr-4 py-1.5 2xl:py-2.5 text-center  border-b border-gray-400">

                            {{--<livewire:product.toggle-product :product="$product" :field="'estado_product'"
                            :key="'toggle-button'.$product->id">--}}
                        </td>
                    </tr>
                    <tr class="hover:bg-blue-200">
                        <td class="pl-4 pr-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">cristian{{--$product->codigo--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">Heredia Suaznabar{{--$product->name_product--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">14164143{{--$product->precio--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">av.circunvalacion k5 hacia sacaba{{--$product->cantidad_inventario--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">mgregory@gmail.com{{-- date('d/m/Y', strtotime($product->fecha_vencimiento)) --}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">68475821{{--$product->marca--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">05/01/1999{{--$category[$product->category_id-1]->name_categoy--}}</th>
                        <td class="pl-2 pr-4 py-1.5 2xl:py-2.5 text-center  border-b border-gray-400">

                            {{--<livewire:product.toggle-product :product="$product" :field="'estado_product'"
                            :key="'toggle-button'.$product->id">--}}
                        </td>
                    </tr>
                    {{--@endforeach--}}
                    
                </tbody>
            </table>
            {{-- $products->links() --}}
        </div>
    </div>

    {{----------------------------Tabla vendedores deshabilidados----------------------}}
    <div class=" bg-[#E3E9F1] sm:ml-8 lg:ml-12 pb-3 mt-3">
        <h2 class="text-4xl font-bold font-anek">Usuarios inactivos</h2>
    </div>

    <div class="sm:px-8 lg:px-12">
        <div class="bg-white overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg 2xl:py-2 shrink">
            <table class="md:table-fixed w-full font-anek">
                <thead class="md:py-8">
                    <tr class="bg-white text-dark">      
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Nombre</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Apellido</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">CI</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Dirección</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Correo</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Celular</th>
                        <th class=" py-0 text-center text-ellipsis overflow-hidden border-b-2 border-black">Fecha de Nacimiento</th>
                        <th class=" py-2 text-center text-ellipsis overflow-hidden border-b-2 border-black">Estado</th>  
                    </tr>
                </thead>
                <tbody>
                    {{--@foreach($products as $product)--}}


                    <tr class="hover:bg-blue-200">
                        <td class="pl-4 pr-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">cristian{{--$product->codigo--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">Heredia Suaznabar{{--$product->name_product--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">14164143{{--$product->precio--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">av.circunvalacion k5 hacia sacaba{{--$product->cantidad_inventario--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">mgregory@gmail.com{{-- date('d/m/Y', strtotime($product->fecha_vencimiento)) --}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">68475821{{--$product->marca--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">05/01/1999{{--$category[$product->category_id-1]->name_categoy--}}</th>
                        <td class="pl-2 pr-4 py-1.5 2xl:py-2.5 text-center  border-b border-gray-400">

                            {{--<livewire:product.toggle-product :product="$product" :field="'estado_product'"
                            :key="'toggle-button'.$product->id">--}}
                        </td>
                    </tr>
                    <tr class="hover:bg-blue-200">
                        <td class="pl-4 pr-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">cristian{{--$product->codigo--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">Heredia Suaznabar{{--$product->name_product--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">14164143{{--$product->precio--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">av.circunvalacion k5 hacia sacaba{{--$product->cantidad_inventario--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">mgregory@gmail.com{{-- date('d/m/Y', strtotime($product->fecha_vencimiento)) --}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">68475821{{--$product->marca--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">05/01/1999{{--$category[$product->category_id-1]->name_categoy--}}</th>
                        <td class="pl-2 pr-4 py-1.5 2xl:py-2.5 text-center  border-b border-gray-400">

                            {{--<livewire:product.toggle-product :product="$product" :field="'estado_product'"
                            :key="'toggle-button'.$product->id">--}}
                        </td>
                    </tr>
                    <tr class="hover:bg-blue-200">
                        <td class="pl-4 pr-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">cristian{{--$product->codigo--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">Heredia Suaznabar{{--$product->name_product--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">14164143{{--$product->precio--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">av.circunvalacion k5 hacia sacaba{{--$product->cantidad_inventario--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">mgregory@gmail.com{{-- date('d/m/Y', strtotime($product->fecha_vencimiento)) --}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">68475821{{--$product->marca--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">05/01/1999{{--$category[$product->category_id-1]->name_categoy--}}</th>
                        <td class="pl-2 pr-4 py-1.5 2xl:py-2.5 text-center  border-b border-gray-400">

                            {{--<livewire:product.toggle-product :product="$product" :field="'estado_product'"
                            :key="'toggle-button'.$product->id">--}}
                        </td>
                    </tr>
                    <tr class="hover:bg-blue-200">
                        <td class="pl-4 pr-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">cristian{{--$product->codigo--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">Heredia Suaznabar{{--$product->name_product--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">14164143{{--$product->precio--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden whitespace-nowrap border-b border-gray-400">av.circunvalacion k5 hacia sacaba{{--$product->cantidad_inventario--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">mgregory@gmail.com{{-- date('d/m/Y', strtotime($product->fecha_vencimiento)) --}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">68475821{{--$product->marca--}}</th>
                        <td class="px-2 py-1.5 2xl:py-2.5 text-center text-ellipsis overflow-hidden border-b border-gray-400">05/01/1999{{--$category[$product->category_id-1]->name_categoy--}}</th>
                        <td class="pl-2 pr-4 py-1.5 2xl:py-2.5 text-center  border-b border-gray-400">

                            {{--<livewire:product.toggle-product :product="$product" :field="'estado_product'"
                            :key="'toggle-button'.$product->id">--}}
                        </td>
                    </tr>
                    {{--@endforeach--}}
                    
                </tbody>
            </table>
            {{-- $products->links() --}}
        </div>
    </div>

</div>
