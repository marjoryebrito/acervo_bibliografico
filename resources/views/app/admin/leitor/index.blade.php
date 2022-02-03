@extends('app.admin.layout.comum_adm')

@section('apresentacao')

	
<h1 class="titulo_principal">Leitores &nbsp;</h1>
     
@endsection

@section('conteudo')
<table class="tabela_acervo">
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Editar</th>
    </tr>
    
        @foreach ($leitores as $leitor)
    <tr>   
        
        <td>{{$leitor->nome}}</td>
        <td>{{$leitor->cpf}}</td>
        <td>{{$leitor->email}}</td>
        <td><a href="{{ route('leitor.edit', ['leitor'=>$leitor->id])}}"><img src="https://img.icons8.com/ios/20/000000/pencil-tip.png"/></a></td>
    </tr>
        @endforeach
    </table>
@endsection