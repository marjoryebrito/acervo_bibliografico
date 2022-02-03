@if (isset($leitor->id))
<form action="{{route('leitor.update', ['leitor'=>$leitor->id])}}" method="post">
    @csrf
    @method('PUT')
@else
<form action="{{route('leitor.store')}}" method="POST">
    @csrf
@endif
	<label>Nome</label><br>
	<input type="text" name="nome" value="{{ $leitor->nome ?? old('nome')}}" />
	<div class="div-erros">{{$errors->has('nome') ? $errors->first('nome') : ''}}</div>

	<label>CPF</label><br>
	<input type="text" name="cpf" value="{{ $leitor->cpf ??  old('cpf')}}"/><br>
	<div class="div-erros">{{$errors->has('cpf') ? $errors->first('cpf') : ''}}</div>

	<label>E-mail</label><br>
	<input type="text" name="email" value="{{ $leitor->email ??  old('email')}}"/><br>
	<div class="div-erros">{{$errors->has('email') ? $errors->first('email') : ''}}</div>
	
	<Button class = "button_app" type="submit">Enviar</Button>
	</form>
