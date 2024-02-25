<div class = "topo">
    <a href="{{ route('site.index') }}">
        <img id = "logotipo" src = {{asset("img/logotipo.jpg")}}>
        </a>
    <div id = "menu">
    <nav class="navbar navbar-light">
        <div calss = "container-fluid">      
            <div class="d-flex justify-content-between w-100" id = "opcoes">
                <a href="{{ route('site.escritor') }}" class="navbar-brand">Escritores</a>
                <a href="#" class="navbar-brand">Matérias</a>
                <a href="#" class="navbar-brand">Quem somos</a>
                <a href="{{ route("site.login")}}" class="navbar-brand">Entrar</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar...." aria-label="Search">
                    <button class="btn" type="submit" id = "botao-pesquisar">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
    </div>
    




</div>