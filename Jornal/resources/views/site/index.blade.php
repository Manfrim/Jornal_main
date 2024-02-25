@extends('site.layouts.basico')


@section('conteudo')
    <style>
        #opcoes a{
            color: white;
        }
        #botao-pesquisar:hover{
            color: white;
        }
    </style>
    <section>
        <img id = "imagem_fundo" src={{asset("img/capa.jpg")}} alt="logotipo">
    </section>
    <main>
        <div class = "container-fluid" id = "separador">
            <div class = "row">
                <div class = "col-md-3">
                    <h1>ÚLTIMAS NOTÍCIAS</h1>
                </div>
                <div class = "col-md-9">
                    <hr id = "linha-separador">
                </div>
            </div>
        </div>
        <div class = "container-fluid" id = "materias-principais">
            <div class = "row">
                @foreach($ultimos3 as $item)
                    <div class = "col-md-3 mb-4">
                        <div class="card" style="width: 24rem;  max-height: 30em;">
                            <a href="{{ route('site.lermateria', ['id' => $item->id]) }}">
                                <img src={{asset("img/".$item->imagem_capa)}} class="card-img-top" alt="...">
                            </a>
                            <div class="card-body" style="overflow-y: auto;">
                                <h5 class="card-title">{{$item->nome_materia}}</h5>
                                <p>Categoria Matéria</p>
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
                    </div>
                @endforeach
            </div>
            <div class = "container-fluid" id = "resumos-materias">
                @foreach($ultimos3 as $item)
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="{{$item->id}}">
                        <div class="card card-body" style="width: 80vw;">
                        {{$item->resumo_materia}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
    <script>
        const popover = new bootstrap.Popover('.popover-dismiss', {
        trigger: 'focus'
        })
    </script>
@endsection