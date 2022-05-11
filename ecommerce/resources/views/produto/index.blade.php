<x-app-layout>
    <x-slot name="header">
        Produtos (index)
    </x-slot>
    <div class="container mt-3">
        <a href="{{route('produto.create')}}">
            <x-button class="mt-2 mb-2 ml-2">  Criar registro  </x-button>
        </a>
        @foreach($produtos as $p)
        <div class="container d-block">
            <div class="col mt-6 ml-3 lg-6">
                <div class="row">

                     Produto  ID: {{$p->id}}
                    </div>
                <div class="row">
                <label>Nome:</label>
                {{$p->nome}}
                </div>
                <div class="row">
                <label>Descrição:</label>
                {{$p->descricao}}
            </div>
                <div class="row">
                <label>Id Fornecedor:</label>
                {{$p->fornecedor_id}}
            </div>

                <div class="mt-3">
                <a href="{{route('produto.edit', $p->id)}}">
                    <x-button>   alterar </x-button>
                </a>
                <form action="{{route('produto.destroy', $p->id)}}" method="POST">
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
