<x-app-layout>
    <x-slot name="header">
        Todas as Categorias
    </x-slot>

        @foreach($categorias as $c)
            <div>
                {{$c->descricao}}
                <form action="" method="">
                    
                </form>
            </div>
        @endforeach

</x-app-layout>
