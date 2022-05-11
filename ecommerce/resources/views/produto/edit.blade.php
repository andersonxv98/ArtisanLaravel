<x-app-layout>
    <x-slot name="header">
        Produtos
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('produto.update', $produto -> id)}}" method="post">
        @csrf
        @method("Patch")
        <div>
            <x-label>Informe o nome do produto:</x-label>
            <x-input name="nome" value="{{$produto-> nome}}"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe a descrição do produto:</x-label>
            <x-input name="descricao" value="{{$produto-> descricao}}"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe o id do Fornecedor:</x-label>
            <x-input name="fornecedor_id" value="{{$produto-> fornecedor_id}}"
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

