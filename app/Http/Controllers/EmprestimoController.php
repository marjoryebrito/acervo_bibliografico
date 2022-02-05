<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Livro;
use \App\Models\Emprestimo;
use Illuminate\Support\Facades\DB;

class EmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $emprestimos = DB::table('emprestimos')
        ->join('livros', 'livros.id', '=', 'emprestimos.livro_id')
        ->join('leitors', 'leitors.id', '=', 'emprestimos.leitor_id')
        ->select('emprestimos.*', 'livros.titulo', 'leitors.nome')->orderBy('livros.titulo', 'asc')
        ->paginate(1);

        return view('app.admin.emprestimo.index', ['emprestimos'=> $emprestimos, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $regras = ['leitor_id' => 'required'];
        $feedback = ['leitor_id.required' => 'É necessário selecionar um leitor.'];

        $request->validate($regras, $feedback);

        Emprestimo::create($request->all());

        Livro::where('id', $request->input('livro_id'))->update(['status'=>'Indisponível']);
        

        
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
       
      return view('app.admin.emprestimo.show', ['livro' => $livro]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        Emprestimo::where('livro_id', $request->input('livro_id'))->delete();

        Livro::where('id',  $request->input('livro_id'))->update(['status'=> 'Disponível']);

        return redirect()->route('livro.index');
    }
}
