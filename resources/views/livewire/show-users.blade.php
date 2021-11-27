<div class="relative ">
    <table class="w-full text-left border-collapse ">
        <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead>
            <tr>
                <th
                    class="px-6 py-4 text-sm font-bold text-gray-800 uppercase border-b border-gray-100">
                    ID
                </th>
                <th
                    class="px-6 py-4 text-sm font-bold text-gray-800 uppercase border-b border-gray-100">
                    Nombre
                </th>
                <th
                    class="px-6 py-4 text-sm font-bold text-gray-800 uppercase border-b border-gray-100">
                    Rol
                </th>
                <th
                    class="px-6 py-4 text-sm font-bold text-gray-800 uppercase border-b border-gray-100">
                    Correo
                </th>
                <th
                    class="px-6 py-4 text-sm font-bold text-gray-800 uppercase border-b border-gray-100">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allUsers as $user)
                <tr class="hover:bg-gray-200">
                    <td class="px-6 py-4 border-b border-gray-100">{{ $user->id }}</td>
                    <td class="px-6 py-4 border-b border-gray-100">{{ $user->name }}</td>
                    <td class="px-6 py-4 border-b border-gray-100">{{ $user->role->name }}</td>
                    <td class="px-6 py-4 border-b border-gray-100">{{ $user->email }}</td>
                    <td class="px-6 py-4 border-b border-gray-100">
                        <a  wire:click="$emit('editUser', {{ $user->id }})"
                            class="px-3 py-1 mr-1 text-xs font-bold text-gray-100 bg-green-500 rounded cursor-pointer hover:bg-green-800"
                        >
                            Edit
                        </a>
                        <a wire:click="delete({{ $user->id }})"
                            class="px-3 py-1 mr-1 text-xs font-bold text-gray-100 bg-red-500 rounded cursor-pointer hover:bg-red-800"
                        >
                            Delete
                        </a>
                    </td>
                </tr>
                
            @endforeach

        </tbody>
    </table>
    <div class="absolute -bottom-14">
        <x-flash-messages></x-flash-messages>

    </div>
</div>

