@extends('app.admin.layout.comum_adm')

@section('apresentacao')

	
<h1 class="titulo_principal">Cadastrar leitor &nbsp;</h1>
     
@endsection

@section('conteudo')
<div class="div_form">
	<form>
	<label>Nome</label><br>
	<input type="text"/><br>

	<label>CPF</label><br>
	<input type="text"/><br>

	<label>E-mail</label><br>
	<input type="text"/><br>

	<Button type="submit">Cadastrar</Button>
	</form>

    </div>
@endsection