<div>
    <div>
        <div class="flex flex-row place-content-between">
            <div class="sm:ml-8">
                <a href="/crear-products">
                    <button class=" bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        AÑADIR
                    </button>
                </a>
            </div>  

            <div class="flex sm:mr-8">
                <input wire:model="search" type="search"  class=" p-2.5 w-80 md:w-56 text-sm text-gray-900 bg-gray-50 rounded-lg border-l-gray-300 border border-gray-300 focus:ring-gray-300 focus:border-gray-300" placeholder="Buscar">
                {{-- <button type="submit" class="absolute top-0 left-96 ml-20 pl-4 p-2.5 bg-gray-50 rounded-r-lg border border-gray-300 hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button> --}}
            </div>

            

        </div>
        
        <div class="py-2"></div>        

        <div class="sm:px-8">
           @if(session()->has('message'))
                <div class="bg-green-100 border border-green-400 text-green-700 py-3 rounded relative ml:120" role="alert" 
                style="padding-left: 28px;">
                    <strong class="font-bold">{{ session('message') }}</strong>
                </div>
            @endif
            
            <livewire:product.modal>
            <div class="bg-white overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg pb-2 shrink">
                <table class="md:table-fixed w-full font-anek">
                    <thead class="h-12">
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
                        @foreach($products as $product)


                        <tr class="hover:bg-blue-200">
                            <td wire:click="mostrarModal({{ $product->id }})" class="cursor-pointer px-3 py-1 2xl:py-3 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">
                                {{$product->codigo}}
                            </th>
                            <td wire:click="mostrarModal({{ $product->id }})" class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis md:overflow-hidden ms:overflow-hidden  border-b border-gray-400 whitespace-nowrap">
                                    {{ $product->name_product }}
                                {{-- <a class="hover:text-blue-700 hover:underline" id="botonAbrir echo $product->id ?>" style="cursor:pointer;">

                                    {{ $product->name_product }}
                                </a> --}}

                                {{-- <livewire:product.modal :product=$product :key="'modal'.$product->id"> --}}
                            </th>

                            <td wire:click="mostrarModal({{ $product->id }})" class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">{{$product->precio}}</th>
                            <td wire:click="mostrarModal({{ $product->id }})" class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">{{$product->cantidad_inventario}}</th>
                            <td wire:click="mostrarModal({{ $product->id }})" class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">@if($product->fecha_vencimiento) {{date('d/m/Y', strtotime($product->fecha_vencimiento))}} @else Sin Vencimiento @endif</th>
                            <td wire:click="mostrarModal({{ $product->id }})" class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">{{$product->marca}}</th>
                            <td wire:click="mostrarModal({{ $product->id }})" class="cursor-pointer pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">{{$category[$product->category_id-1]->name_categoy}}</th>
                            <td class="pr-3 py-1 2xl:text-lg text-center  border-b border-gray-400">
                                <livewire:product.toggle-product :product="$product" :field="'estado_product'"
                                :key="'toggle-button'.$product->id">
                            </td>
                            <td class="pr-3 py-1 2xl:text-lg text-center border-b border-gray-400">
                                {{-- <a href="/modificar-producto/{{ $product->id }}"> --}}
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
                {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>