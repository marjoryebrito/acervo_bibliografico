@extends('app.admin.layout.comum_adm')

@section('apresentacao')

	
<h1 class="titulo_principal">Emprestar livro &nbsp;</h1>
     
@endsection

@section('conteudo')
@if ($livro->status == 'Disponível')
<form action=" {{ route('emprestimo.store')}}" method="post">
    @csrf
    <input type="hidden" name="livro_id" value="{{$livro->id}}">
    <table>
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

    Emprestar para: 
    
        
        <select name="leitor_id">
        <option value="">--Selecione--</option>

        @foreach ($leitores as $leitor)
            <option value="{{$leitor->id}}">{{$leitor->nome}}</option>
        @endforeach
    
    </select>

    <Button type="submit">Emprestar</Button>
</form>
@else
<div>
    <form action=" {{ route('emprestimo.destroy', $livro->id)}}" method="post">
        @csrf
        @method('DELETE')
    <input type="hidden" name="livro_id" value="{{$livro->id}}">
    <p>Livro indisponível. Deseja registrar a devolução?</p>
    <button type="submit">Devolver</button>
    </form>
</div>
   


@endif

@endsection