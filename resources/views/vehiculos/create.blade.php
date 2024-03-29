<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Vehiculo') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('vehiculos.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to Vehiculos</a>
            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-lg">
                <form action="{{ route('vehiculos.store') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg mx-auto">
                    @csrf
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Oops! Something went wrong.</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="w-full mb-5">
                        <label for="categoria" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Categoria</label>
                        <select name="categoria_id" id="categoria" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full mb-5">
                        <label for="marca" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">marca</label>
                        <input type="text" name="marca" id="marca" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    <div class="w-full mb-5">
                        <label for="modelo" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">modelo</label>
                        <input type="text" name="modelo" id="modelo" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                
                    <div class="w-full mb-5">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Vehiculo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
