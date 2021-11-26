<div
    x-data="{
        showModalEditUser: @entangle('showModalEditUser'),
        {{-- fields: @entangle('fields'), --}}
    }"
>

    <x-modal trigger="showModalEditUser" class="px-9">
        <div class="p-10 bg-white rounded-md ">
            <h2 class="text-lg text-gray-600 ">Editar Usuario</h2>
            
            <form
                class="" 
                wire:submit.prevent
                novalidate
            >
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input wire:model='fields.name' class="block w-full mt-1" type="text" name="name" :value="old('name')" autocomplete="name" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input wire:model='fields.email' class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
                </div>
                <div class="mt-4">
                    <x-jet-label for="Role" value="{{ __('Role') }}" />
                    <select wire:model='fields.role_id' class="block w-full px-4 py-2 pr-8 leading-tight bg-white border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:border-indigo-300 borderappearance-none hover:border-gray-500 ">
                            
                        <option disabled selected value='0'>Seleccione un Rol</option>
                        <option value='1'>Administrador</option>
                        <option value='2'>Consultor</option>
                    </select>
                </div>
                    
                <div class="flex items-center justify-end mt-4">
    
                    <x-jet-button wire:click="updateUser({{$id_user}})"  class="ml-4">
                        {{ __('Update') }}
                    </x-jet-button>
                </div>
            </form>
            <x-jet-validation-errors class="mb-4" />
        </div>
        
        <x-flash-messages></x-flash-messages>
    </x-modal>
</div>
