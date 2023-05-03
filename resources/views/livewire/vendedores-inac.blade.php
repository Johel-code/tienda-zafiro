<div class="sm:px-8 lg:px-12">
    <div class="bg-white overflow-hidden overflow-x-auto shadow-x1 sm:rounded-lg pb-2 shrink">
        <table class="md:table-fixed w-full font-anek">
            <colgroup>
                <col class="md:w-1/4">
                <col class="md:w-2/5 2xl:w-1/3">
                <col class="md:w-2/5 2xl:w-1/3">
                <col class="md:w-1/3 2xl:w-1/6">
                <col class="md:w-2/5 2xl:w-1/3">
                <col class="md:w-2/5 2xl:w-1/3">
                <col class="md:w-1/3 2xl:w-1/6">
                <col class="md:w-1/3 2xl:w-2/5">
                <col class="md:w-1/4 2xl:w-1/6">
            </colgroup>
            <thead class="h-12">
                <tr class="bg-white text-dark">   
                    <th class="2xl:py-4 2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Nro</th>   
                    <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Nombre</th>
                    <th class="2xl:text-lg text-center text-ellipsis border-b-2 border-black">Apellido</th>
                    <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">CI</th>
                    <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Dirección</th>
                    <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Correo</th>
                    <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Celular</th>
                    <th class="2xl:text-lg text-center text-ellipsis md:overflow-hidden border-b-2 border-black whitespace-nowrap">Fecha de Nacimiento</th>
                    <th class="2xl:text-lg text-center text-ellipsis overflow-hidden border-b-2 border-black">Estado</th>  
                </tr>
            </thead>
            <tbody>
                @foreach($usersInac as $user)

                <tr class="hover:bg-blue-200">
                    <td class="px-3 py-1 2xl:py-3 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">
                        {{ $loop->index + 1 + ($usersInac->currentPage() -1) * $usersInac->perPage() }}
                    </th>
                    <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400 whitespace-nowrap">
                        {{ $user->name }}
                    </th>
                    <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400 whitespace-nowrap">
                        {{ $user->last_name }}
                    </th>
                    <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">
                        {{ $user->ci }}
                    </th>
                    <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400 whitespace-nowrap">
                        {{ $user->direccion }}
                    </th>
                    <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">
                        {{ $user->email }}
                    </th>
                    <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">
                        {{ $user->celular }}
                    </th>
                    <td class="pr-3 py-1 2xl:text-lg text-center text-ellipsis overflow-hidden border-b border-gray-400">
                        @if($user->fecha_nacimiento)
                            {{ date('d/m/Y', strtotime($user->fecha_nacimiento)) }} @else No Especificado
                        @endif
                        
                    </th>
                    <td class="pr-3 py-1 2xl:text-lg text-center border-b border-gray-400">

                        <livewire:vendedor.toggle-vendedor2 :user="$user" :field="'activo_user'"
                        :key="'toggle-button'.$user->id">
                    </td>
                </tr>
                
             @endforeach
                
            </tbody>
        </table>
        {{ $usersInac->links() }}
       
    </div>
</div>
