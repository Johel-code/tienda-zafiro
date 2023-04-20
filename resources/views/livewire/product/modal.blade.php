<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <!-- Botón para abrir el modal -->
    <!--Modal-->
    <div class="hidden fixed inset-0" id="modal<?php echo $product->id ?>">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>
            <div class="border-8 border-[#E3E9F1] inline-block bg-[#E3E9F1] rounded-lg text-left overflow-hidden shadow-xl transform transition-all align-middle" style="width: 15cm; height: 10cm;">
                <!--Contenido-->
                <div class="flex justify-between">
                    <div>
                        <h2 class="text-xl font-bold ml-8 mt-5 text-ellipsis overflow-hidden">{{$product->name_product}}</h2>
                    </div>
                    <div>
                        <button id="botonCerrar<?php echo $product->id ?>" class=" rounded-md  shadow-md px-2 bg-[#597AAB] text-white font-semibold">x</button>
                    </div>
                </div>

                <article class="mx-5 grid grid-cols-5 bg-[#E3E9F1] transition mt-1 ">
                    <div class="col-span-2">
                    <img src="{{ asset('uploads/images/'.$product->image) }}" alt="{{$product->name_product}}" style="width: 150px; height: 150px;" class="aspect-square shadow-lg object-cover mx-5 my-3">
                    </div>
                    <div class="justify-between ml-5 mr-5 mt-1.5 mb-8 col-span-3">
                        <h2 class="font-bold text-lg">Descripcion</h2>
                        <p class="font-semibold text-ellipsis overflow-hidden">{{$product->descripcion}}</p>
                    </div>
                </article>
                
                <div class="px-8 grid grid-cols-4 grid-rows-3 gap-2 my-3">
                    <div class="font-bold">Precio (Bs)</div>
                    <div class="font-semibold">{{$product->precio}}</div>
                    <div class="font-bold">Cantidad (Ud)</div>
                    <div class="font-semibold">{{$product->cantidad_inventario}}</div>
                    <div class="font-bold">Marca</div>
                    <div class="font-semibold">{{$product->marca}}</div>
                    <div class="font-bold">Categoria</div>
                    {{--{{dd($product->category_id)}}--}}
                    <div class="font-semibold">{{$product->categoria->name_categoy}}</div>
                    <div class="font-bold">Fecha de ven.</div>
                    <div class="font-semibold">{{date('d/m/Y', strtotime($product->fecha_vencimiento)) }}</div>
                    <div class="font-bold">Estado</div>
                    <div class="font-semibold">@if($product->estado_product == 1) Activo @else Inactivo @endif</div>
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
