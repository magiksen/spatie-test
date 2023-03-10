<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Doctores/as') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(session('info'))
                        <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert">
                            {{ session('info') }}
                        </div>
                    @endif
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <a href="{{ route('doctors.create') }}" type="button" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Registrar Doctor/ra</a>
                                    <table class="min-w-full">
                                        <thead class="bg-white border-b">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                ID
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Nombre
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Instituci??n
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($doctors as $doctor)
                                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $doctor->id }}</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $doctor->name }}
                                                </td>
                                                @if($doctor->institution)
                                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $doctor->institution->name }}
                                                    </td>
                                                @else
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    Sin instituci??n
                                                </td>
                                                @endif
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    <a href="{{ route('doctors.edit', $doctor) }}" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Editar</a>
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    <form action="{{ route('doctors.destroy', $doctor) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
