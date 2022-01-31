<!DOCTYPE html>
<html>
<head>
    <title>Acervo Bibliográfico</title>
   <link rel="stylesheet" href="{{asset('css/estilo_adm.css')}}">
</head>
    <body>


        

        <div class="menu">
            <ul>
                <li><a href="">Sair</a></li>
                <li><a href="">Página Inicial</a></li>
                
            </ul>
        </div>

        <div class="menu_vertical">
            <ul>
                <li><a href="">Cadastrar Livro</a></li>
                <li><a href="">Ver Acervo</a></li>
                
            </ul>
        </div>

        <div class="workspace">
            @yield('conteudo')

        </div>

</body>
<footer>
    <p class="texto_footer">
        © Marjorye Andrade de Brito
    </p>
</footer>
</html>