@extends('app.admin.layout.comum_adm')

@section('apresentacao')

	
<h1 class="titulo_principal">Cadastrar leitor &nbsp;</h1>
     
@endsection

@section('conteudo')
<div class="div_form">
	@component('app.admin.leitor._components.form_create_edit')
		
	@endcomponent
    </div>
@endsection