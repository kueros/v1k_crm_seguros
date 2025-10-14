<x-admin-layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Gestión de Usuarios</h1>
        <a href="#" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Crear Usuario
        </a>
    </div>

    <div class="bg-base-100 shadow-xl rounded-lg overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>
                        <div class="font-bold">{{ $user->name }}</div>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            <div class="badge badge-ghost">{{ $role->name }}</div>
                        @endforeach
                    </td>
                    <th class="text-right">
                        <a href="#" class="btn btn-ghost btn-sm">Editar</a>
                    </th>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center p-4">No se encontraron usuarios.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</x-admin-layout>