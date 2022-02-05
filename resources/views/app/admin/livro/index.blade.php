@extends('app.admin.layout.comum_adm')

@section('apresentacao')

	
<h1 class="titulo_principal">Bem-vindo &nbsp;</h1>
     
@endsection

@section('form-pesquisa')

@component('app.admin.livro._components.form_busca_livro')
		
@endcomponent

@endsection



@section('conteudo')

<table class="tabela_acervo">
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>Edição</th>
        <th>Status</th>
        <th>Emprestar/ <br> Devolver</th>
        <th>Editar</th>
    </tr>

    @foreach ($livros as $livro)
    <tr>
        <td>{{$livro->titulo}}</td>
        <td>{{$livro->autor}}</td>
        <td>{{$livro->editora}}</td>
        <td>{{$livro->edicao}}</td>
        <td>{{$livro->status}}</td>
        <td><a href="{{ route('livro.show', $livro->id)}}"><img src="https://img.icons8.com/ios/20/000000/open-book.png"/></a></td>
        <td><a href="{{ route('livro.edit', ['livro'=>$livro->id])}}"><img src="https://img.icons8.com/ios/20/000000/pencil-tip.png"/></a></td>
    </tr>
    @endforeach

    </table>
    
    {{$livros->appends($request)->links('pagination::bootstrap-4')}}
@endsection    