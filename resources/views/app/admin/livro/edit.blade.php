@extends('app.admin.layout.comum_adm')

@section('apresentacao')

	
<h1 class="titulo_principal">Editar cadastro &nbsp;</h1>
     
@endsection


@section('conteudo')

<div class="div-opcoes-edicao" >
	<form id="form_{{$livro->id}}" action="{{ route('livro.destroy', ['livro' => $livro->id]) }}" method="post">
		@csrf
		@method('DELETE')
	<a href="#" onclick="document.getElementById('form_{{$livro->id}}').submit()">Excluir cadastro</a>
	</form>
</div>

<div class="div_form">
	
	@component('app.admin.livro._components.form_create_edit', ['livro'=> $livro])
	
	@endcomponent

    </div>
@endsection