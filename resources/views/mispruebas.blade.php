<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
  </head>
  <body>
    <!-- Abrir modal -->
    <button id="open-modal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">AbrirModal</button>
    <!-- id modal-component-container añada hidden -->
    <div id="modal-component-container" class=" fixed inset-0">
        <div class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="modal-bg-container fixed inset-0 bg-gray-700 bg-opacity-75"></div>
            <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>
            <div id="modal-container" class="modal-container border-2 inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all align-middle" style="width: 15cm; height: 10cm;">
                
                <div class=" flex justify-end pt-3 px-3">
                    <button id="close-modal" class="rounded-md border border-black-300 shadow-md 
                    px-3 bg-white hover:bg-gray-50">x</button>
                </div>
                
                <div class="px-7">
                    <h2 class="text-lg font-bold">Nombre Producto</h2>
                </div>

                <article class="px-5 flex bg-white transition">
                    <img src="../../../img/sb_esponja.png" alt="esponja" style="width: 176px; height: 176px;" class="aspect-square object-cover">
                    <div class="justify-between pl-2 pr-7">
                        <h2 class="font-bold">Descripcion</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi saepe ipsa laboriosam dolorum, cum accusamus corrupti veritatis vitae asperiores quisquam,?</p>
                    </div>
                </article>               
                
                <div class="px-8 grid grid-cols-4 grid-rows-3 gap-1">
                    <div class="font-bold">Precio</div>
                    <div class="">2.49$</div>
                    <div class="font-bold">Cantidad</div>
                    <div class="">142 Ud</div>
                    <div class="font-bold">Marca</div>
                    <div class="">Label</div>
                    <div class="font-bold">Categoria</div>
                    <div class="">Label</div>
                    <div class="font-bold">Vencimiento</div>
                    <div class="">18/07/2023</div>
                    <div class="font-bold">Estado</div>
                    <div class="">Activo</div>
                </div>
                  
                <div class="modal-actions flex justify-end pt-3 pb-3 sm:px-3">
                    <button id="modificar" class="w-full inline-flex justify-center rounded-md border border-gray-300 shadow-md 
                    px-3 py-2 bg-white hover:bg-gray-50 focus:ring-2 focus:ring-offset-2 focus:ring-blue-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Editar Producto</button>    
                </div>
            </div>  
        </div>
    </div>
    <script>
        const closeButton = document.querySelector("#close-modal");
        const openButton = document.querySelector("#open-modal");
        const modalContainer = document.querySelector("#modal-component-container");
        const modal = document.querySelector("#modal-container");
        openButton.addEventListener("click", () => {openModal();});
        closeButton.addEventListener("click", () => {closeModal();});

        function openModal() {
            showAndHide(modalContainer, ["block","bg-fadeIn"], ["hidden","bg-fadeOut"]);
            showAndHide(modal, ["modal-scaleIn"], ["modal-scaleOut"]);
        }
        function closeModal() {
            showAndHide(modalContainer, ["bg-fadeOut"], ["bg-fadeIn"]);
            showAndHide(modal, ["modal-scaleOut"], ["modal-scaleIn"]);
            setTimeout(() => {
               showAndHide(modalContainer, ["hidden"], ["block"]); 
            }, 50);
        }

        function showAndHide(element, classessToAdd, classessToRemove){
            element.classList.remove(...classessToRemove);
            element.classList.add(...classessToAdd);    
        }

    </script>
  </body>
</html> 
