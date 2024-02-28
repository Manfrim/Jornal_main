@extends('site.layouts.basico')


@section('conteudo')
    <main>
    @foreach ($materia as $item)
        
    
            <div class = "container-fluid" id = "container-ler-materia">
                <div class ="container">
                <h2>{{$item->nome_materia}}</h2>
                <img src={{asset("img/".$item->imagem_1)}} class="img-fluid" alt="...">
                <p>{{$item->materia_p1}}</p>
                <p>{{$item->materia_p2}}</p>
                <img src={{asset("img/".$item->imagem_2)}} class="img-fluid" alt="...">
                <p>{{$item->materia_p3}}</p>
                <p>{{$item->materia_p4}}</p>
                </div>
            </div>
    @endforeach
    </main>

@endsection