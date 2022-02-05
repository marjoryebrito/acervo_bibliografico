@extends('app.admin.layout.comum_adm')

@section('apresentacao')

	
<h1 class="titulo_principal">Empréstimos &nbsp;</h1>
     
@endsection

@section('conteudo')

<table class="tabela_acervo">
    <tr>
        <th>Título do livro</th>
        <th>Leitor</th>
        <th>Data do empréstimo</th>
    </tr>

    @foreach ($emprestimos as $emprestimo)
    <tr>
        <td>{{$emprestimo->titulo}}</td>
        <td>{{$emprestimo->nome}}</td>
        <td>{{date('d/m/y', strtotime($emprestimo->created_at))}}</td>
    </tr>
    @endforeach

    </table>
@endsection    