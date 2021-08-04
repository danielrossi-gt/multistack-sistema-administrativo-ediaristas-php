<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{

    /**
     * Página de Sobre
     *
     * @return void
     */
    public function Sobre()
    {
        return view('sobre');
    }

    /**
     * Página de Contato
     *
     * @return void
     */
    public function Contato()
    {
        return  view('contato');
    }

}
