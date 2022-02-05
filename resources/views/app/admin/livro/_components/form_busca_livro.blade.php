<div class="div_form_busca">
    <form action="{{ route('livro.buscaLivro')}}" method="post">
     @csrf
     <div style="margin-left: 10px">
        <label>Busca por título</label><br>
        <input type="text" name="busca_titulo"/>

    </div>
    
    <div style="float: right; margin-top:-65px; margin-right:335px;">
        <label>Busca por status</label><br>
        <select name="busca_status">
            <option value="">--Selecione--</option>
            <option value="Disponível">Disponível</option>
            <option value="Indisponível">Indisponível</option>
        </select><br>
    </div>
   
    <div style="float: right; margin-top:-47px; margin-right:95px;">
    <button class="button_exluir" type="submit">Buscar</button>
</div>
</form>
<hr><br>
</div>   