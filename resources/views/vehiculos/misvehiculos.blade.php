<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis Vehiculos') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('vehiculos.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Vehiculo</a>
            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-lg">
                @if ($vehiculos->count())
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2">Marca</th>
                                <th class="px-4 py-2">Modelo</th>
                                <th class="px-4 py-2">Categoria</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehiculos as $vehiculo)
                                <tr class="text-center">
                                    <td class="border px-4 py-2">{{ $vehiculo->marca }}</td>
                                    <td class="border px-4 py-2">{{ $vehiculo->modelo }}</td>
                                    <td class="border px-4 py-2">{{ $vehiculo->categoria->categoria }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                                        <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No Vehiculos found.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
