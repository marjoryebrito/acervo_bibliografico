@extends('app.admin.layout.comum_adm')

@section('apresentacao')

	
<h1 class="titulo_principal">Editar Cadastro &nbsp;</h1>
     
@endsection




@section('conteudo')

<div class="div-opcoes-edicao" >
	<form id="form_{{$leitor->id}}" action="{{ route('leitor.destroy', ['leitor' => $leitor->id]) }}" method="post">
		@csrf
		@method('DELETE')
	<a href="#" onclick="document.getElementById('form_{{$leitor->id}}').submit()">Excluir cadastro</a>
	</form>
</div>

<div class="div_form">
	@component('app.admin.leitor._components.form_create_edit', ['leitor'=>$leitor])
		
	@endcomponent
    </div>
@endsection