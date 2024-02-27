@extends('site.layouts.basico')


@section('conteudo')
    @if($auth)
    <section>
        <div class = "container fluid" id ="botoes-editor-materia">
            <div class = "row">
                <div class = "col-md-4">
                    <button class = "btn btn-outline-dark"  onclick="aparecer1()">Adicionar Matéria</button>
                </div>
                <div class = "col-md-4">
                    <button class = "btn btn-outline-dark" onclick="aparecer2()">Editar Matéria</button>
                </div>
                <div class = "col-md-4">
                    <button class = "btn btn-outline-dark" onclick="aparecer3()">Excluir Matéria</button>
                </div>
            </div>
        </div>
    </section>
    <main>
        <div class = "d-none" id = "adicionarmateria">
            <div class = "container fluid">
                <form method="POST" action="{{ route('site.adicionamateria') }}">
                @csrf
                <h5>Coloque o titulo da matéria</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="titulo"></textarea>
                <h5>Coloque o resumo da matéria</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="resumo"></textarea>
                <h5>Coloque o primeiro paragrafo</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="materia_p1"></textarea>
                <h5>Coloque o segundo paragrafo</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="materia_p2"></textarea>
                <h5>Coloque o terceiro paragrafo</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="materia_p3"></textarea>
                <h5>Coloque o quarto paragrafo</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="materia_p4"></textarea>
                <h5>Coloque o nome da imagem da capa</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="imagem_capa"></textarea>
                <h5>Coloque o nome da primeira imagem</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="imagem_1"></textarea>
                <h5>Coloque o nome da segunda imagem</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="imagem_2"></textarea>
                <br>
                <button type="submit" class="btn btn-primary">Adicionar Matéria</button>
            </form>
            </div>
        </div>

        <div class = "d-none" id = "editarmateria">
                @foreach(DB::table('jornal')->get() as $item)
                    <h2>{{$item->nome_materia}}</h2>
                    <button class = "btn btn-outline-dark" onclick="edicaomateria({{$item->id}})">Editar</button>
                    <div class = "d-none" id = "form-editar-materia-{{$item->id}}">
                        <form method="POST" action="{{ route('site.editarmateria') }}">
                        @csrf
                        <h5>Coloque o titulo da matéria</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="titulo">{{$item->nome_materia}}</textarea>
                        <h5>Coloque o resumo da matéria</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="resumo">{{$item->resumo_materia}}</textarea>
                        <h5>Coloque o primeiro paragrafo</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="materia_p1">{{$item->materia_p1}}</textarea>
                        <h5>Coloque o segundo paragrafo</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="materia_p2">{{$item->materia_p2}}</textarea>
                        <h5>Coloque o terceiro paragrafo</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="materia_p3">{{$item->materia_p3}}</textarea>
                        <h5>Coloque o quarto paragrafo</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="materia_p4">{{$item->materia_p4}}</textarea>
                        <h5>Coloque o nome da imagem da capa</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="imagem_capa">{{$item->imagem_capa}}</textarea>
                        <h5>Coloque o nome da primeira imagem</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="imagem_1">{{$item->imagem_1}}</textarea>
                        <h5>Coloque o nome da segunda imagem</h5>
                        <textarea class="form-control" placeholder="Leave a comment here" name="imagem_2">{{$item->imagem_2}}</textarea>
                        <br>
                        <button type="submit" class="btn btn-primary" value = "{{$item->id}}" name = "id">Atualizar Matéria</button>
                    </form>
                    </div>
                @endforeach
        </div>
    </main>
    <script>
        var adicionar_materia = document.getElementById("adicionarmateria");
        var editarmateria = document.getElementById("editarmateria");
        function aparecer1(){
            if(adicionar_materia.classList.contains("d-none")){
                adicionar_materia.classList.remove("d-none")
            } else{
                adicionar_materia.classList.add("d-none")
            }
        }
        function aparecer2(){
            if(editarmateria.classList.contains("d-none")){
                editarmateria.classList.remove("d-none");
            } else{
                editarmateria.classList.add("d-none");
            }
        }
        function edicaomateria(id){
        var divEditarMateria = document.getElementById("form-editar-materia-" + id);
        if (divEditarMateria.classList.contains("d-none")) {
            divEditarMateria.classList.remove("d-none");
        } else {
            divEditarMateria.classList.add("d-none");
        }
    }
    </script>
    @else
    <script>
        window.location.href = "{{ route('site.login') }}";
    </script>
    @endif
@endsection