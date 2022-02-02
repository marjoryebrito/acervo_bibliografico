
@if (isset($livro->id))
<form action="{{route('livro.update', ['livro'=>$livro->id])}}" method="post">
    @csrf
    @method('PUT')
@else
<form action="{{route('livro.store')}}" method="POST">
    @csrf
@endif
	<label>Título do livro</label><br>
	<input type="text" name="titulo" value="{{ $livro->titulo ?? old('titulo')}}" />
	<div class="div-erros">{{$errors->has('titulo') ? $errors->first('titulo') : ''}}</div>

	<label>Autor do Livro</label><br>
	<input type="text" name="autor" value="{{ $livro->autor ??  old('autor')}}"/><br>
	<div class="div-erros">{{$errors->has('autor') ? $errors->first('autor') : ''}}</div>

	<label>Editora</label><br>
	<input type="text" name="editora" value="{{ $livro->editora ??  old('editora')}}"/><br>
	<div class="div-erros">{{$errors->has('editora') ? $errors->first('editora') : ''}}</div>

	<label>Nº Edição</label><br>
	<input type="number" name="edicao" value="{{ $livro->edicao ??  old('edicao')}}"/><br>
	<div class="div-erros">{{$errors->has('edicao') ? $errors->first('edicao') : ''}}</div>
	
	<Button class = "button_app" type="submit">Enviar</Button>
	</form>
