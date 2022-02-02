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
    <tr>
        <td>Luke Skywalker</td>
        <td>123.456.789-00</td>
        <td>luke@sw.com</td>
        <td><a href=""><img src="https://img.icons8.com/ios/20/000000/pencil-tip.png"/></a></td>
    </tr>
   
    </table>
@endsection