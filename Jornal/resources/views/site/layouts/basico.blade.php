<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Jornal Do Manfrim</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/jornal.css')}}">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    </head>

    <body>
        @include('site.layouts._partials.topo')
        @yield('conteudo')
    </body>
</html>