<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <!-- Botón para abrir el modal -->
    <!--Modal-->
    <div class="hidden fixed inset-0 z-20" id="modal<?php echo $product->id ?>">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="modal-bg-container fixed inset-0 bg-gray-700 bg-opacity-30"></div>
            <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>
            <div class="border-8 border-white inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all align-middle" style="width: 17cm; height: 10cm;">
                <!--Contenido-->
                <div class="flex justify-between">
                    <div>
                        <h2 class="text-xl font-bold ml-8 mt-5 text-ellipsis overflow-hidden">{{$product->name_product}}</h2>
                    </div>
                    <div>
                        <button id="botonCerrar<?php echo $product->id ?>" class=" rounded-md  shadow-md px-2 bg-[#597AAB] text-white font-semibold">x</button>
                    </div>
                </div>

                <div class="mx-5 grid grid-cols-5 transition mt-1 ">
                    <div class="col-span-2">
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{$product->name_product}}" style="width: 180px; height: 150px;" class="aspect-square shadow-lg object-cover mx-5 my-3">
                    </div>
                    <div class="justify-between ml-5 mr-5 mt-1.5 mb-8 col-span-3">
                        <h2 class="font-bold text-lg">Descripción</h2>

                        <p class="text-justify whitespace-normal">
                            @if($product->descripcion) 
                                {{ $product->descripcion }}
                            @else 
                                Sin descripción 
                            @endif

                        </p>


                    </div>
                </div>
                
                <div class="px-8 grid grid-cols-4 grid-rows-3 gap-2 my-3">
                    <div class="font-bold">Precio (Bs)</div>
                    <div class="">{{$product->precio}}</div>
                    <div class="font-bold">Cantidad (Ud)</div>
                    <div class="">{{$product->cantidad_inventario}}</div>
                    <div class="font-bold">Marca</div>
                    <div class="">{{$product->marca}}</div>
                    <div class="font-bold">Categoría</div>
                    {{--{{dd($product->category_id)}}--}}
                    <div class="">{{$product->categoria->name_categoy}}</div>
                    <div class="font-bold">Fecha de ven.</div>

                    <div class="">
                        @if($product->fecha_vencimiento) 
                            {{date('d/m/Y', strtotime($product->fecha_vencimiento))}} 
                        @else 
                            Sin vencimiento
                        @endif
                    </div>

                    <div class="font-bold">Estado</div>
                    <div class="">@if($product->estado_product == 1) Activo @else Inactivo @endif</div>
                </div>

            </div>
        </div>
    </div>

    <script>
        const botonAbrir<?php echo $product->id ?> = document.getElementById("botonAbrir<?php echo $product->id ?>");
        const botonCerrar<?php echo $product->id ?> = document.getElementById("botonCerrar<?php echo $product->id ?>");

        function AbrirModal() {
            document.getElementById("modal<?php echo $product->id ?>").classList.remove("hidden");
        }
        botonAbrir<?php echo $product->id ?>.addEventListener("click", AbrirModal);

        function cerrarModal() {
            document.getElementById("modal<?php echo $product->id ?>").classList.add("hidden");
        }
        botonCerrar<?php echo $product->id ?>.addEventListener("click", cerrarModal);
    </script>
</div>
