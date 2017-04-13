<?php

namespace App\Http\Controllers;

use App\Valor;

use Illuminate\Http\Request;

class ValorController extends Controller
{
    //
    public function index()
    {
        $valores = Valor::paginate(10);
        return view('valores.index', compact('valores'));
        //return view('valores.index');
    }
}
