@extends('app.admin.layout.comum_adm')

@section('apresentacao')

	
<h1 class="titulo_principal">Emprestar livro &nbsp;</h1>
     
@endsection

@section('conteudo')
@if ($livro->status == 'Disponível')
<form action=" {{ route('emprestimo.store')}}" method="post">
    @csrf
    <input type="hidden" name="livro_id" value="{{$livro->id}}">
    <table class="tabela_acervo">
        <tr>
            <td>ID:</td>
            <td>{{$livro->id}}</td>
        </tr>
        <tr>
            <td>Título do livro:</td>
            <td>{{$livro->titulo}}</td>
        </tr>
        <tr>
            <td>Autor:</td>
            <td>{{$livro->autor}}</td>
        </tr>
        <tr>
            <td>Título do livro:</td>
            <td>{{$livro->editora}}</td>
        </tr>
        <tr>
            <td>Edição:</td>
            <td>{{$livro->edicao}}</td>
        </tr>
        <tr>
            <td>Status:</td>
            <td>{{$livro->status}}</td>
        </tr>
    </table>
    <br><br>
    
    <span style="font-family: Arial, Helvetica, sans-serif;" >Emprestar para:</span>  
    
    {{$errors->has('leitor_id') ? $errors->first('leitor_id') : ''}}
    
        <select name="leitor_id">
        <option value="">--Selecione--</option>

        @foreach ($leitores as $leitor)
            <option value="{{$leitor->id}}">{{$leitor->nome}}</option>
        @endforeach
    
    </select>
	<div class="div-erros">{{$errors->has('leitor_id') ? $errors->first('leitor_id') : ''}}</div>



    <Button class= "button_exluir" type="submit">Emprestar</Button>
</form>
@else
<div>
    <form action=" {{ route('emprestimo.destroy', $livro->id)}}" method="post">
        @csrf
        @method('DELETE')
    <input type="hidden" name="livro_id" value="{{$livro->id}}">
    <h3>Livro indisponível. Deseja registrar a devolução?</h3>
    <button class="button_exluir" type="submit">Devolver</button>
    </form>
</div>
   


@endif

@endsection