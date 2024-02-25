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
    <section alt = "principal-escritor">
        <div class = "container-fluid" id = "resumo-sobre-rogerio">
            <div class = "row" style="justify-content: center;">
                <div class = "col-md-4">
                    <a href="{{ route('site.escritor') }}"><img src="img/foto_linkedin.jpg" class="img-fluid" alt="..."></a>
                </div>
                <div class = "col-md-7">
                    <h2>Um pouco sobre Rogério</h2>
                    <p>Lorem ipsum dolor sit amet. Et dolore ratione eos voluptatem neque 33 reiciendis deserunt? Et necessitatibus veniam et sapiente distinctio id rerum aperiam et dolore molestiae qui amet libero non enim ratione. Sed aperiam distinctio id molestiae quaerat ex dignissimos autem et nemo consequatur et sint aperiam aut sapiente commodi cum veniam internos.
                    Sit officia nobis est cumque explicabo ut eaque deserunt ut consequuntur dolor ab dolor animi. Ab voluptatem eligendi est corporis ullam id culpa facere vel beatae velit ut optio delectus? Ex saepe voluptatibus ex molestias dolorum sit aperiam veniam?
                    </p>
                    <div class = "row" style="display: flow; justify-content: space-between;">
                        <a href = "https://www.instagram.com/prof_manfrim/"><i id = "instagram" class="fa-brands fa-instagram fa-2xl"></i></a>
                        <a href = "https://www.linkedin.com/in/manfrim/"><i id = "linkedin" class="fa-brands fa-linkedin fa-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection