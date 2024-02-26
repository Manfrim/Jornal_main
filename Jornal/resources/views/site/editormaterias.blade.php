@extends('site.layouts.basico')


@section('conteudo')
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
                <form method="POST" action="{{ route('site.editamateria.process') }}">
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
                <textarea class="form-control" placeholder="Leave a comment here" name="imgame_capa"></textarea>
                <h5>Coloque o nome da primeira imagem</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="imagem_1"></textarea>
                <h5>Coloque o nome da segunda imagem</h5>
                <textarea class="form-control" placeholder="Leave a comment here" name="imagem_2"></textarea>
                <br>
                <button type="submit" class="btn btn-primary" value="1" name="id">Adicionar Matéria</button>
            </form>
            </div>
        </div>

        <div class = "d-none" id = "editar-materia">
        </div>
    </main>
    <script>
        var adicionar_materia = document.getElementById("adicionarmateria");

        function aparecer1(){
            adicionar_materia.classList.remove("d-none");
        }
    </script>
@endsection