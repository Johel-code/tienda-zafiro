

<div id="botones-cancelar-continuar" class="flex justify-end mt-20">
    @foreach ($datos as $dato)
    <!-- Mostrar los datos -->
    <p>{{ $dato['codigo'] }}</p>
    <p>{{ $dato['nombre'] }}</p>
    <!-- ... -->
@endforeach
    <button type="submit" wire:click="redirigir"class="bg-[#3988FF] hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">
        CONTINUAR
    </button>
</div>
