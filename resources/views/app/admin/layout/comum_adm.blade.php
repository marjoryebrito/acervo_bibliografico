<!DOCTYPE html>
<html>
<head>
    <title>Acervo Bibliográfico</title>
   <link rel="stylesheet" href="{{asset('css/estilo_adm.css')}}">
</head>
    <body>


        
        <div class="menu">
            <ul>
        <li style="float:left;"><a href="{{ route('livro.index')}}"><b>Acervo Bibliográfico</b></a></li>
                <!--<li><a href="">Sair</a></li>-->
            </ul>
        </div>
        
        
        
        <div class="menu_vertical">
            <ul>
        <li><a href=""><pre>
        </pre></a></li>
        <li><a href="{{ route('livro.index')}}">Página Inicial</a></li>
        <li><a href="{{ route('livro.create')}}">Cadastrar Livro</a></li>
        <li><a href="{{ route('leitor.create')}}">Cadastrar Leitor</a></li>
        <li><a href="{{ route('leitor.index')}}">Ver leitores</a></li>
      
                
            </ul>
        </div>
        
        <div class="workspace">
            <div class= "faixa">

                @yield('apresentacao')

             </div> 

             @yield('form-pesquisa')
             @yield('feedback')
             @yield('conteudo')




        </div>


</body>
<footer>
    <p class="texto_footer">
        © Marjorye Andrade de Brito
    </p>
</footer>
</html>