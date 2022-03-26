<x-app-layout>
    <x-slot name="header">
        Todas as Categorias
    </x-slot>

        @foreach($categorias as $c)
            <div>
                {{$c->descricao}}
                <form action="{{route('categoria.destroy', $c->id)}}" method="POST">
                    @csrf 
                    @method("Delete")
                    <x-button> Excluir</x-button>
                </form>
            </div>
        @endforeach

</x-app-layout>
