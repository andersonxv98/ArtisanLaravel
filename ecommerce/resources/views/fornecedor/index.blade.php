<x-app-layout>
    <x-slot name="header">
        Todas Os fornecedores
    </x-slot>
    <div class="container mt-3">
        <a href="{{route('fornecedor.create')}}">
            <x-button class="mt-2 mb-2 ml-2">  Criar registro  </x-button>
        </a>
        @foreach($fornecedors as $f)
        <div class="container d-block">
            <div class="col mt-6 ml-3 lg-6">
                <div class="row">

                     CATEGORIA ID: {{$f->categoria_id}}
                    </div>
                <div class="row">
                <label>descricao:</label>
                {{$f->descricao}}
                </div>
                <div class="row">
                <label>Produto:</label>
                {{$f->produto}}
            </div>
                <div class="row">
                <label>Preco:</label>
                {{$f->preco}}
            </div>
                <div class="row">
                <label>CNPJ:</label>
                {{$f->cnpj}}
            </div>
                <div class="row">
                <label>Cidade:</label>
                {{$f->cidade}}
                </div>
                <div class="mt-3">
                <a href="{{route('fornecedor.edit', $f->id)}}">
                    <x-button>   alterar </x-button>
                </a>
                <form action="{{route('fornecedor.destroy', $f->id)}}" method="POST">
                    @csrf
                    @method("Delete")
                    <x-button class="mt-1"> Excluir</x-button>
                </div>
                </form>
            </div>
            <div  class="mt-3">

            </div>
        </div>

        @endforeach

</x-app-layout>
