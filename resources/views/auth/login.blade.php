<x-guest-layout>
    <div style="background-image: url('logo/login_fondo.png'); background-size: cover; background-position: center;"
         class="fondo-login min-h-screen flex flex-col justify-center items-center">
        
         <div class="fixed z-50 modal-login px-12 pt-3 pb-2 bg-white shadow-lg overflow-hidden rounded-lg">
            
            <div class="text-center mt-7 mb-9 mx-7 px-6">
                <label class="text-3xl font-anek font-bold text-[#063780]">INICIAR SESION</label>
            </div>

            <form method="POST" action="">
                @csrf

                <label class="block font-semibold text-xs text-gray-700 mb-1">Correo</label>
                <input type="email" value="{{ old('email') }}" class="border border-gray-300 w-full rounded-md shadow-md h-8 text-sm"
                id="email" name="email">
                @error('email')
                <small>
                    <p class="cursor-default text-red-700 w-full text-xs">{{ $message }}</p>
                </small>   
                @enderror
                

                <div class="my-3"></div>

                <label class="block font-semibold text-xs text-gray-700 mb-1">Contraseña</label>
                <div class="relative">
                    <input type="password" class="border border-gray-300 w-full rounded-md shadow-md h-8 text-sm pr-9"
                    id="password" name="password">
                    <img src="logo/eyeoculto.png" alt="" class="hover:border-white hover:border rounded-full
                    cursor-pointer absolute top-0 right-0 w-8 p-2 opacity-30" id="eye">
                </div>
                @error('password')
                <small>
                    <p class="cursor-default text-red-700 w-full text-xs">{{ $message }}</p>
                </small>   
                @enderror
                
                @error('message')
                <p class="text-red-700 w-full h-8 text-sm mt-3">{{ $message }}</p>
                @enderror

                <button type="submit" class="rounded-md bg-[#063780] hover:bg-[#063780f0] w-full text-xs text-gray-200 font-semibold h-8
                p-2 mt-10 mb-8">Ingresar</button>
            </form>

        </div>

        {{--<div style="position: fixed; margin-top: 10rem; margin-right: -52rem; width: 29rem; transform: rotate(-2deg);" class="hidden sm:block">
            <div class="self-end">
                <img src="{{ asset('logo/zafiro.png') }}" alt="zafiro" class="">
            </div>
        </div>--}}

        <script>
            var eye= document.getElementById('eye');
            var password= document.getElementById('password');
            eye.addEventListener("click",function(){
                if(password.type == "password"){
                    password.type = "text"
                    eye.style.opacity=0.7
                    eye.src= "logo/eyevisible.png"
                }else{
                    password.type = "password"
                    eye.style.opacity=0.3
                    eye.src= "logo/eyeoculto.png"
                }
            })
        </script>

    </div>    
</x-guest-layout>