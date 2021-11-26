<div>
    <div class="p-10 bg-white rounded-md ">
        <h2 class="text-lg text-gray-600 ">Crear Usuarios</h2>
        
        <form
            class="" 
            wire:submit.prevent="create"
            novalidate
        >
            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" wire:model.defer='fields.name' class="block w-full mt-1" type="text" name="name" :value="old('name')" autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" wire:model.defer='fields.email' class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="Role" value="{{ __('Role') }}" />
                <select wire:model.defer='fields.role_id' class="block w-full px-4 py-2 pr-8 leading-tight bg-white border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:border-indigo-300 borderappearance-none hover:border-gray-500 ">
                      
                    <option disabled selected value='0'>Seleccione un Rol</option>
                    <option value='1'>Administrador</option>
                    <option value='2'>Consultor</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" wire:model.defer='fields.password' class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" wire:model.defer='fields.password_confirmation' class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            
            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
        <x-jet-validation-errors class="mb-4" />
    </div>
    <x-flash-messages></x-flash-messages>
</div>