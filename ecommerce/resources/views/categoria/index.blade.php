<x-app-layout>
    <x-slot name="header">
        Todas as Categorias
    </x-slot>
        <a href="{{route('categoria.create')}}">
           <x-button class="mt-2 mb-2 ml-2"> Criar registro </x-button>
        </a>

        @foreach($categorias as $c)
            <div class="col mt-6 ml-3 lg-6">
                <div class="row">
                    Descrição : {{$c->descricao}}
                </div>
                <div class="row">
                  Id Categoria:   {{$c->id}}
                </div>
                <a href="{{route('categoria.edit', $c->id)}}">
                   <x-button class="mt-1"> alterar </x-button>
                </a>
                <form action="{{route('categoria.destroy', $c->id)}}" method="POST">
                    @csrf
                    @method("Delete")
                    <x-button class="mt-1"> Excluir</x-button>
                </form>
            </div>
        @endforeach

</x-app-layout>
