<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {

        $servicos = Servico::paginate(10);
        //$servicos = Servico::simplePaginate(1);

        //dd($servicos);

        return view('servicos.index')->with('servicos', $servicos);
    }

    public function create()
    {
        return view('servicos.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $dados = $request->except('_token');
        $retorno = Servico::create($dados);

        //dd($retorno);
        return redirect()->route('servicos.index');

    }

    public function edit(int $id)
    {
        //dd('cheguei aqui ' . $id);

        $servico = Servico::findOrFail($id);

        return view('servicos.edit')->with('servico', $servico);
    }

    public function update(int $id, Request $request)
    {
        
        //dd($id, $request->all());

        $dados = $request->except(['_token', '_method']);

        //dd($dados);

        $servico = Servico::findOrFail($id);
        $servico->update($dados);

        return redirect()->route('servicos.index');

    }

}

