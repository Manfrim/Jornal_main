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
                                <div class = "row">
                                    <div class = "col-md-6 mb-4">
                                        <a href="{{ route('site.lermateria', ['id' => $item->id]) }}" class="btn btn-outline-dark">Leia Agora</a>
                                    </div>
                                    <div class = "col-md-6 mb-4">
                                        <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                                    </div>
                                </div>

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