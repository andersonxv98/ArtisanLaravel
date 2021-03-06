<x-app-layout>
    <x-slot name="header">
        Fornecedores
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('fornecedor.store')}}" method="post">
        @csrf
        <div>
            <x-label>Informe a descricao do produto:</x-label>
            <x-input name="descricao"
                     class="block mt-1 w-full"/>
        </div>

        <div>
            <x-label>Informe o preco do produto:</x-label>
            <x-input name="preco"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe o cnpj do fornecedor:</x-label>
            <x-input name="cnpj"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe a cidade do fornecedor:</x-label>
            <x-input name="cidade"
                     class="block mt-1 w-full"/>
        </div>
        <div>
            <x-label>Informe o Id da Categoria:</x-label>
            <x-input name="categoria_id", type="number"
                     class="block mt-1 w-full"/>
        </div>
        <div class="mt-5">
            <x-button>Salvar</x-button>
        </div>
    </form>

                </div>
            </div>
        </div>
    </div>




</x-app-layout>

