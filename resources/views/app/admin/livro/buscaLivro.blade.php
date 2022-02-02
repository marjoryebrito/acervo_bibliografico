@extends('app.admin.layout.comum_adm')

@section('apresentacao')

	
<h1 class="titulo_principal">Resultado da busca &nbsp;</h1>
     
@endsection

@section('form-pesquisa')
<div>
    <form action="{{ route('livro.buscaLivro')}}" method="post">
        @csrf
    <label>Busca por título</label><br>
    <input type="text" name="busca_titulo"/>
    <label>Busca por status</label><br>
    <select name="busca_status" id="">
        <option value="">--Selecione--</option>
        <option value="Disponível">Disponível</option>
        <option value="Indisponível">Indisponível</option>
    </select>
    
    <input type="submit" name="busca"/>
</form>
    <hr><br>
</div>   
@endsection



@section('conteudo')

<table class="tabela_acervo">
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>Edição</th>
        <th>Status</th>
        <th>Emprestar</th>
        <th>Editar</th>
    </tr>

    @foreach ($livros as $livro)
    <tr>
        <td>{{$livro->titulo}}</td>
        <td>{{$livro->autor}}</td>
        <td>{{$livro->editora}}</td>
        <td>{{$livro->edicao}}</td>
        <td>{{$livro->status}}</td>
        <td><a href=""><img src="https://img.icons8.com/ios/20/000000/open-book.png"/></a></td>
        <td><a href=""><img src="https://img.icons8.com/ios/20/000000/pencil-tip.png"/></a></td>
    </tr>
    @endforeach

    </table>
@endsection