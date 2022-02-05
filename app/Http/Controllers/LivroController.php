<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Livro;
use \App\Models\Leitor;
use \App\Models\Emprestimo;


class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $livros = Livro::paginate(5);
       
       return view('app.admin.livro.index', ['livros'=> $livros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.admin.livro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validação dos campos
        $regras = [
            'titulo' => 'required',
            'autor' => 'required',
            'editora' => 'required',
            'edicao' => 'required|integer'
        ];
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido.',
            'edicao.integer'=> 'O Nº da edição deve ser um numero inteiro'
        ];

        $request->validate($regras, $feedback);

        Livro::create($request->all());

        return redirect()->route('livro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {

        $leitores = Leitor::all();

        return view('app.admin.livro.show', ['livro' => $livro, 'leitores'=>$leitores]);

    }

    public function buscaLivro(Request $request)
    {

        //@dd($request);

       $livros = Livro::where('titulo', 'like', '%'.$request->input('busca_titulo').'%')
        ->where('status', 'like', '%'.$request->input('busca_status').'%')->paginate();

        return view('app.admin.livro.buscaLivro', ['livros'=> $livros , 'request'=>$request->all()]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro)
    {
        return view('app.admin.livro.edit', ['livro'=> $livro]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livro $livro)
    {

        $msg = '';
        $update = $livro->update($request->all());

        if($update){
            $msg = 'Atualização realizada com sucesso.';
        }else{
            $msg = 'Problemas ao atualizar cadastro.';
        }

        return redirect()->route('livro.edit', ['livro'=>$livro->id, 'msg'=>$msg]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect()->route('livro.index');
    }
}
