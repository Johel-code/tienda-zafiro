<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
  </head>
  <body>
    <!-- Abrir modal -->
    <button id="open-modal" class="bg-blue-500 hover:bg-blue-700 text-white font-extrabold py-2 px-4 rounded">AbrirModal</button>
    <!-- id modal-component-container añada hidden -->
    <div id="modal-component-container" class=" fixed inset-0">
        <div class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="modal-bg-container fixed inset-0 bg-white bg-opacity-0"></div>
            <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>
            <div id="modal-container" class="modal-container border-10 border-[#E3E9F1] inline-block bg-[#E3E9F1] rounded-lg text-left overflow-hidden shadow-xl transform transition-all align-middle" style="width: 15cm; height: 10cm;">
                
                <div class="flex justify-between">
                    <div>
                        <h2 class="text-xl font-bold ml-8 mt-5">Esponja-X</h2>
                    </div>
                    <div>
                        <button id="close-modal" class=" rounded-md  shadow-md px-2 bg-[#063780] text-white font-semibold">x</button>
                    </div>
                </div>
                
                <article class="mx-5 flex bg-[#E3E9F1] transition mt-1 ">
                    <img src="../../../img/sb_esponja.png" alt="esponja" style="width: 150px; height: 150px;" class="aspect-square shadow-lg object-cover mx-5 my-3">
                    <div class="justify-between ml-40px mr-10 mt-7px mb-30px">
                        <h2 class="font-bold text-lg">Descripcion</h2>
                        <p class="font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi saepe ipsa laboriosam dolorum, cum accusamus corrupti veritatis,?</p>
                    </div>
                </article>               
                
                <div class="px-8 grid grid-cols-4 grid-rows-3 gap-2 my-3">
                    <div class="font-bold">Precio</div>
                    <div class="font-semibold">2.49$</div>
                    <div class="font-bold">Cantidad</div>
                    <div class="font-semibold">142 Ud</div>
                    <div class="font-bold">Marca</div>
                    <div class="font-semibold">Scotch-Brite</div>
                    <div class="font-bold">Categoria</div>
                    <div class="font-semibold">Lava Platos</div>
                    <div class="font-bold">Vencimiento</div>
                    <div class="font-semibold">18/07/2023</div>
                    <div class="font-bold">Estado</div>
                    <div class="font-semibold">Vigente</div>
                </div>
                <!-- Abrir modal  
                <div class="modal-actions flex justify-end pt-6 sm:px-1">
                    <button id="modificar" class="w-full inline-flex justify-center rounded-md border border-white shadow-md 
                    px-3 py-1 bg-[#063780] text-white focus:ring-2 focus:ring-offset-2 focus:ring-blue-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Editar Producto</button>    
                </div>
                 -->
            </div>  
        </div>
    </div>
    <style>
        .border-10 {
          border-width: 10px;
        }
        .mt-7px {
            margin-top: 7px/* 7px */;
        }
        .ml-40px {
            margin-left: 40px/* 40px */;
        }
        .mb-30px {
            margin-bottom: 30px/* 30px */;
        }
    </style>     
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
