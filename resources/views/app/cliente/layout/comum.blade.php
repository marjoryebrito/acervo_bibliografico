<!DOCTYPE html>
<html>
<head>
    <title>Acervo Bibliográfico</title>
   <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
</head>
    <body>
        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.index') }}">Página Inicial</a></li>
                <li><a href="{{ route('cliente.sobrenos') }}">Sobre Nós</a></li>
                <li><a href="{{ route('cliente.contato') }}">Contato</a></li>
                <li><a href="{{ route('cliente.acervo') }}">Acervo</a></li>
            </ul>
        </div>

@yield('conteudo')

</body>
<footer>
    <p class="texto_footer">
        © Marjorye Andrade de Brito
    </p>
</footer>
</html>