
<div id="ventana_registrar_personal" class="flex justify-center items center ">
    <div class="bg-[#E3E9F1] ml-10 my-2 mt-6 xl:pr-10 xl:mr-10">
        <form class="2xl:ml-6 2xl:px-0 2xl:mr-0 xl:ml-0 xl:pr-0 xl:pl-0 my-2  md:pl-6 sm:pl-4 sm:pr-10" wire:submit.prevent="submit">
            @if(session()->has('message'))
                <div class=" bg-green-100 border border-green-400 text-green-700 px-120 py-3 rounded relative ml:120" role="alert">
                    <strong class="font-anek block text-center">{{ session('message') }}</strong>
                </div>
            @endif
            <div class=" pt-10">
                <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
                2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                        <div class="">

                            <label class="block text-black-700 text-lg font-bold font-anek" for="nombre">
                                Nombre:<span class="text-red-900">*</span>

                            </label>
                        </div>
                        <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                            id="nombre" type="text" placeholder="Nombre" wire:model="nombre" maxlength="50" 
                            oninput="this.value = this.value.replace(/[^a-zA-ZZñÑáéíóúÁÉÍÓÚüÜ ]/g, '')">
                            @error('nombre') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                        
                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                    lg:gap-16 md:gap-0 sm:gap-0">
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2">
                            <label class="block text-black-700 text-lg font-bold 2xl:ml-28 xl:ml-24 lg:ml-16 w-10 font-anek" for="ci">
                                CI:<span class="text-red-900">*</span>

                            </label>
                        </div>
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2
                                    sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                            id="ci" type="text" placeholder="Carnet de identidad" wire:model="ci" maxlength="8"p
                            onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">
                            @error('ci') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror

                        </div>
                    </div>
                </div>

                <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
                2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                        <div class="">

                            <label class="block text-black-700 text-lg font-bold font-anek" for="apellidos">
                                Apellidos:<span class="text-red-900">*</span>

                            </label>
                        </div>
                        <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                            id="apellidos" type="text" placeholder="Apellidos" wire:model="apellido" maxlength="50" 
                            oninput="this.value = this.value.replace(/[^a-zA-ZZñÑáéíóúÁÉÍÓÚüÜ ]/g, '')">
                            @error('apellido') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                    lg:gap-16 md:gap-0 sm:gap-0">
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2">
                            <label class="block text-black-700 text-lg font-bold 2xl:ml-28 xl:ml-24 lg:ml-16 w-10 font-anek" for="direccion">
                                Dirección:<span class="text-red-900">*</span>

                            </label>
                        </div>
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2
                                    sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                            id="direccion" type="text" placeholder="Dirección" wire:model="direccion" maxlength="70"
                            oninput="this.value = this.value.replace(/[^0-9a-zA-ZñÑáéíóúÁÉÍÓÚüÜ#. :/]/g, '')">
                            @error('direccion') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
                2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                        <div class="">

                            <label class="block text-black-700 text-lg font-bold font-anek" for="telefono">
                                Teléfono:<span class="text-red-900">*</span>

                            </label>
                        </div>
                        <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                            id="telefono" type="text" placeholder="Teléfono" wire:model="celular" maxlength="8"
                            onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">
                            @error('celular') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                    lg:gap-16 md:gap-0 sm:gap-0">
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2">
                            <label class="block text-black-700 text-lg font-bold 2xl:ml-28 xl:ml-24 lg:ml-16 w-10 font-anek" for="genero">
                                Género:

                            </label>
                        </div>
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2
                                    sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            {{--<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                            id="genero" type="text" placeholder="Género">--}}
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                            wire:model="genero" id="genero">
                                <option value="">Seleccionar</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                            @error('genero') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
                2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                        <div class="">

                            <label class="block text-black-700 text-lg font-bold font-anek" for="correo">
                                Correo electrónico:<span class="text-red-900">*</span>

                            </label>
                        </div>
                        <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                            id="correo" type="text" placeholder="Correo electrónico" wire:model="correo" maxlength="50"
                            oninput="this.value = this.value.replace(/[^a-zA-Z0-9.@]/g, '')">
                            @error('correo') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                    lg:gap-16 md:gap-0 sm:gap-0">
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2">
                            <label class="block text-black-700 text-lg font-bold 2xl:ml-28 xl:ml-24 lg:ml-16 w-10 font-anek" for="contraseña">
                                Contraseña:<span class="text-red-900">*</span>

                            </label>
                        </div>
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2
                                    sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 
                            id="contraseña" type="password" placeholder="Contraseña" wire:model="password" maxlength="50">
                            @error('password') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                
                </div>

                <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
                2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold font-anek" for="fecha-nacimiento">
                                Fecha de nacimiento:

                            </label>
                        </div>
                        <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-500 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                            id="fecha-nacimiento" type="date" wire:model="fechaNacimiento" max="{{ date('Y-m-d', strtotime('-18 years')) }}"
                            min="{{ date('Y-m-d', strtotime('-100 years')) }}">
                            @error('fechaNacimiento') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                    lg:gap-16 md:gap-0 sm:gap-0">
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2">
                            <label class="block text-black-700 text-lg font-bold 2xl:ml-28 xl:ml-24 lg:ml-16 w-36 lg:max-xl:w-32 font-anek" for="sueldo-mes">
                                Sueldo/mes:(Bs)

                            </label>
                        </div>
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2
                                    sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1]" 

                            id="sueldo-mes" type="number" step="0.50" placeholder="Sueldo por mes" wire:model="salario" maxlength="12" min= '0' max='9999999999.99'
                            oninput="javascript:if (this.value.includes('.')) { if (this.value.split('.')[1].length > 2) 
                            {this.value = parseFloat(this.value).toFixed(2);}} else if (this.value.length > 10) {this.value = this.value.slice(0, 10);}"
                            onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" onpaste="return false">
                            @error('salario') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror

                        </div>
                    </div>
                </div>

                <div class="lg:max-2xl:grid lg:max-2xl:grid-cols-2 lg:max-2xl:gap-4     
                2xl:grid 2xl:grid-cols-2 2xl:gap-4 ">
                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid     lg:max-2xl:grid-cols-2 lg:max-2xl:gap-2    
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-2 2xl:gap-2

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4">
                        <div class="">
                            <label class="block text-black-700 text-lg font-bold font-anek" for="fecha-inicio-contrato">
                                Fecha inicio contrato:

                            </label>
                        </div>
                        <div class="sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-500 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                            id="fecha-inicio-contrato" type="date" wire:model="fechaInicio"
                            min="{{ date('Y-m-d')}}" max="{{ date('Y-m-d', strtotime('100 years')) }}">
                            @error('fechaInicio') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="lg:max-2xl:mb-4 lg:max-2xl:grid lg:max-2xl:grid-cols-4 lg:max-2xl:gap-16
                    
                    2xl:mb-4 2xl:grid 2xl:grid-cols-4 2xl:gap-16

                    sm:max-lg:mb-4 sm:max-lg:grid sm:max-lg:grid-cols-4

                    lg:gap-16 md:gap-0 sm:gap-0">
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2">

                            <label class="block text-black-700 text-lg font-bold 2xl:ml-28 xl:ml-24 lg:ml-16 w-40 lg:max-xl:w-32  font-anek" for="fecha-fin-contrato">

                                Fecha fin contrato:

                            </label>
                        </div>
                        <div class="lg:max-2xl:col-span-2 
                                    2xl:col-span-2
                                    sm:max-lg:col-span-3 sm:max-lg:ml-12">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-500 border-solid border-black leading-tight focus:outline-none focus:shadow-none bg-[#E3E9F1] " 
                            id="fecha-fin-contrato" type="date" wire:model="fechaFin"
                            min="{{ date('Y-m-d') }}" max="{{ date('Y-m-d', strtotime('100 years')) }}">
                            @error('fechaFin') <span class="error text-red-700 font-anek block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="flex justify-center pt-20 lg:pt-10">
                    <button type="submit" class="bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        GUARDAR
                    </button>
                    <button type=button wire:click="$emit('show-modalConfirmacionVendedor')" class=" ml-32 bg-[#597AAB] hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        CANCELAR
                    </button>
                    @livewire('modal-confirmar-cerrar-vendedores')
                </div>
            </div>
        </form>
    </div>
</div>