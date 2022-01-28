@extends('app.cliente.layout.comum')


@section('conteudo')

<section class="back-livro">
    
   <div class="titulo_index">
     <h1 class="titulo_principal_index">Acervo<br/>Bibliográfico</h1><br/>
   </div>

   <div class="card-form">
             <h1>Bem vindo!</h1>

             <form>
                 <label>E-mail: </label>
                 <input type="tel" name="" id="">
                 <label>Senha: </label>
                 <input type="password" name="" id="">
                <button>Entrar</button>
             </form>
             
             <div class = "link_cadastro">
             <label>Ainda não é cadastrado?</label><br/>
             <a href="">Crie sua conta</a>
             </div>  
         </div>
        </section>  

@endsection       

