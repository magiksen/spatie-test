<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Subcategoria') }}
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
                        {!! Form::model($subcategory, ['route' => ['subcategories.update', $subcategory->id], 'method' => 'put']) !!}
                        <div class="mt-4">
                            {!! Form::label('name', 'Nombre', ['class' => 'form-label block mb-2 text-gray-700']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control text-gray-700 border border-solid border-gray-300 rounded', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}
                            {!! Form::label('category_id', 'Categoría', ['class' => 'form-label block mb-2 text-gray-700']) !!}
                            {!! Form::select('category_id', $categories, $subcategory->category_id) !!}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="text-red-700 block mt-2">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        {!! Form::submit('Actualizar Subcategoria', ['class' => 'mt-5 block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out cursor-pointer']) !!}
                        {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
