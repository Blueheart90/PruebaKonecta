<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div x-data="{ showModalCreateUser : false}" class="py-12 ">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            
            <div class="relative mt-10 bg-white shadow-xl sm:rounded-lg">
                
                <button @click="showModalCreateUser = true" class="absolute left-0 flex p-2 text-white bg-blue-500 rounded-md -top-14 hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      Nuevo usuario
                </button>
                <livewire:show-users />
                
            </div>
        </div>
        <x-modal trigger="showModalCreateUser">
            <livewire:admin-form />
            
        </x-modal>
        <livewire:edit-user />
        
    </div>
</x-app-layout>