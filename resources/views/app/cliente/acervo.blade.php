@extends('app.cliente.layout.comum')

@section('conteudo')

<section class="faixa">
    <h1 class="titulo_principal">Acervo</h1>
</section>



<div class="div_acervo">
    <p>A seguir, uma listagem das obras bibliográficas do nosso acervo.</p>

    <table class="tabela_acervo">
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Editora</th>
            <th>Edição</th>
            <th>Nº de exemplares</th>
            <th>Empréstimo</th>
        </tr>
        <tr>
            <td>AADG-ST-01</td>
            <td>A Arte da Guerra</td>
            <td>Sun Tzu</td>
            <td>Principis</td>
            <td>3ª edição (2 maio 2019)</td>
            <td>3</td>
            <td><a href="">...</a></td>
        </tr>
    </table>
</div>
     
@endsection
