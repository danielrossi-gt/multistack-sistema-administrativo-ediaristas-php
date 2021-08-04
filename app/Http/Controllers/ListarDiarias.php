<?php

namespace App\Http\Controllers;

use App\Models\Diaria;

class ListarDiarias extends Controller
{

    /**
     * Lista de Diárias
     *
     * @return void
     */
    public function __invoke()
    {

        $diarias = Diaria::get();
        //dd($diarias);

        return view('listar_diarias')->with('diarias', $diarias);
    }

}
