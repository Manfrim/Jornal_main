@extends('site.layouts.basico')

@section('conteudo')
<section id ="container-materias">
    <div class = "container-fluid">
        <div class = "container">
            <div class = "row">
                @foreach($materias as $item)
                    @php
                        $j = 0;
                        if($j / 2){
                            echo "<br>";
                        }
                    @endphp
                    <div class = "{{$i}}">
                        <div class = "container">
                            <div class="card" style="max-width: 24rem;  max-height: 35em;">
                                <a href="{{ route('site.lermateria', ['id' => $item->id]) }}">
                                    <img src={{asset("img/".$item->imagem_capa)}} class="card-img-top" alt="...">
                                </a>
                                <div class="card-body" style="overflow-y: auto;">
                                    <h5 class="card-title">{{$item->nome_materia}}</h5>
                                    <p>{{$item->categoria}}</p>
                                    <div class = "row" style = "justify-content: center;">
                                        <div class = "col-md-5">
                                            <a href="{{ route('site.lermateria', ['id' => $item->id]) }}" class="btn btn-outline-dark">Leia Agora</a>
                                        </div>
                                        <div class = "col-md-5">
                                            <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#{{$item->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                Saiba Mais
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="min-height: 120px; margin-top: 10px; margin-bottom: 10px;">
                                <div class="collapse collapse-vertical" id="{{$item->id}}">
                                    <div class="card card-body" style="width: 94%; max-height: 200px; overflow-y: auto;">
                                    {{$item->resumo_materia}}
                                    </div>
                                </div>
                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
<section>



@endsection