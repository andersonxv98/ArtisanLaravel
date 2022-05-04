<x-app-layout>
    <x-slot name="header">
        Fornecedore
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('fornecedor.update', $fornecedor -> id)}}" method="post">
        @csrf
        @method("Patch")
        <div>
            <x-label>Informe a descricao:</x-label>
            <x-input name="descricao" value="{{$fornecedor-> descricao}}"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe o produto:</x-label>
            <x-input name="produto" value="{{$fornecedor-> produto}}"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe o preco:</x-label>
            <x-input name="preco" value="{{$fornecedor-> preco}}"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe o cnpj do fornecedor:</x-label>
            <x-input name="cnpj" value="{{$fornecedor-> cnpj}}"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe  a cidade do fornecedor:</x-label>
            <x-input name="cidade" value="{{$fornecedor-> cidade}}"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe  o Id da Categoria:</x-label>
            <x-input name="categoria_id" value="{{$fornecedor-> categoria_id}}"
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

