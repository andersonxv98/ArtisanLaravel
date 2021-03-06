<x-app-layout>
    <x-slot name="header">
        Categorias
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('categoria.update', $categoria -> id)}}" method="post">
        @csrf
        @method("Patch")
        <div>
            <x-label>Informe o Id:</x-label>
            <x-input name="descricao" value="{{$categoria-> id }}"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe a descricao:</x-label>
            <x-input name="descricao" value="{{$categoria-> descricao}}"
                     class="block mt-1 w-full"/>
        </div>
        <div class="mt-5">
            <x-button>Alterar</x-button>
        </div>
    </form>

                </div>
            </div>
        </div>
    </div>




</x-app-layout>

