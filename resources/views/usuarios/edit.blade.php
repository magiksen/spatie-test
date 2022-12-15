<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuario') }}
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

                    <p class="mb-4 font-semibold text-lg">Usuario:</p>
                    <input type="text" readonly value="{{ $usuario->name }}">

                    <h2 class="mt-5 font-semibold text-lg">Listado de Roles</h2>

                    {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'method' => 'put']) !!}
                    @foreach($roles as $role)
                        <div class="mt-4">
                            <label>
                                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1 mt-1']) !!}
                                {{ $role->name }}
                            </label>
                        </div>
                    @endforeach
                        {!! Form::submit('Asignar rol', ['class' => 'mt-5 block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
