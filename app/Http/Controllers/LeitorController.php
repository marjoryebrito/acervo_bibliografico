<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Leitor;
use Illuminate\Support\Facades\DB;

class LeitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $leitores =  DB::table('leitors')->orderBy('nome', 'asc')->paginate(10);

       // $leitores = Leitor::paginate(10);
       
        return view('app.admin.leitor.index', ['leitores' => $leitores, 'request' => $request->all()]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.admin.leitor.create');
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
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required|email',
            
        ];
        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido.',
            'email.email'=> 'Informe um e-mail válido'
        ];

        $request->validate($regras, $feedback);

        Leitor::create($request->all());

        return redirect()->route('leitor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Leitor $leitor)
    {
        return view('app.admin.leitor.edit', ['leitor'=> $leitor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leitor $leitor)
    {
        
        $update = $leitor->update($request->all());

        return redirect()->route('leitor.edit', ['leitor'=>$leitor->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leitor $leitor)
    {
        $leitor->delete();
        return redirect()->route('leitor.index');
    }
}
