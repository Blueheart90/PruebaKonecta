<div class="w-3/4 p-10 mx-auto mt-10 bg-white rounded-md ">
    <h2 class="text-lg text-center text-gray-600 ">Consultar dia de la semana</h2>
    
    <form
        class="mb-16 " 
        wire:submit.prevent="showDay"
        novalidate
    >
        <x-jet-label for="numero" value="{{ __('Numero') }}" />
        <div class="flex w-1/2 mt-4">
            <x-jet-input id="numero" placeholder="Ingresa un numero del 1 - 7" wire:model.defer='numero' class="w-full mt-1 " type="number" name="numero" :value="old('numero')" autocomplete="numero" />
            <x-jet-button class="ml-4">
                {{ __('Enviar') }}
            </x-jet-button>
        </div>
    </form>

    <div x-data="{ showResult : @entangle('showResult') }" class="">
        <div x-show="showResult" x-cloak>
            <h2 class="mb-4 text-lg text-center text-gray-600 ">Resultado</h2>
            <p>El dia es: <span class="text-lg font-bold text-blue-600 ">{{ $resultado }}</span></p>

        </div>
    </div>
    <x-jet-validation-errors class="mb-4" />
</div>
