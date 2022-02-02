

<form action="{{route('livro.store')}}" method="POST">
    @csrf

	<label>Título do livro</label><br>
	<input type="text" name="titulo" value="{{ old('titulo')}}" />
	<div class="div-erros">{{$errors->has('titulo') ? $errors->first('titulo') : ''}}</div>

	<label>Autor do Livro</label><br>
	<input type="text" name="autor" value="{{ old('autor')}}"/><br>
	<div class="div-erros">{{$errors->has('autor') ? $errors->first('autor') : ''}}</div>

	<label>Editora</label><br>
	<input type="text" name="editora" value="{{ old('editora')}}"/><br>
	<div class="div-erros">{{$errors->has('editora') ? $errors->first('editora') : ''}}</div>

	<label>Nº Edição</label><br>
	<input type="number" name="edicao" value="{{ old('edicao')}}"/><br>
	<div class="div-erros">{{$errors->has('edicao') ? $errors->first('edicao') : ''}}</div>
	
	<Button type="submit">Cadastrar</Button>
	</form>
