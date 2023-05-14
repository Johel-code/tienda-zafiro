<x-guest-layout>
    <div style="background-image: url('logo/login_fondo.png'); background-size: cover; background-position: center;"
         class="fondo-login min-h-screen flex flex-col justify-center items-center">
        
         <div class="modal-login w-8/12 sm:max-w-md  my-6 px-14 py-4 bg-white shadow-lg overflow-hidden rounded-lg">
            
            <div class="text-center mt-5 mb-5">
                <span class="text-3xl font-anek font-bold text-[#063780]">INICIAR SESION</span>
            </div>
            
            <form method="POST" action="">
                @csrf

                
                <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg
                placeholder-gray-900 p-2 my-2 focus:bg-white" id="email" name="email">

                <div class="relative">
                    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">
                    <img src="logo/eyeoculto.png" alt="" class="hover:border-white hover:border rounded-full cursor-pointer absolute translate-y-1/2 top-1 right-3 w-7 opacity-30" id="eye">
                </div>

                @error('message')
                <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                @enderror

                <button type="submit" class=" rounded-md bg-indigo-500 w-full text-lg text-white font-semibold
                p-2 my-3 hover:bg-indigo-600">Send</button>
            </form>

        </div>

        <div style="position: fixed; margin-top: 9rem; margin-right: -53rem; width: 27rem;" class="hidden sm:block">
            <div class="self-end">
                <img src="{{ asset('logo/zafiro.png') }}" alt="zafiro" class="">
            </div>
        </div>

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