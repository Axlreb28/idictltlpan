<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function showFormApoyo()
    {
        return view('formapoyo');
    }

    public function showFormTransfor()
    {
        return view('formtransfor');
    }

    public function showFormJuven()
    {
        return view('formjuven');
    }

    public function showFormularioSubdirec()
    {
        return view('formulario_Subdirec');
    }

    public function showFormCuidadoInfancias()
    {
        return view('formcuidadoinfancias');
    }

    public function showFormJUDIncidencias()
    {
        return view('formJUDIncidencias');
    }

    public function showFormJUDdepor()
    {
        return view('formJUDdepor');
    }
}
