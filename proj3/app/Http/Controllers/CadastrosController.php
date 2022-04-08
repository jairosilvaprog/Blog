<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastrosController extends Controller
{
    public function index()
   {
    return view('home');
    }
    

    public function create(Request $request)
   {
    $cadastro= Cadastro::create([
        'nome'=> $request->nome,
        'telefone'=> $request->telefone]);
    return "Obrigado pelo contato $cadastro->nome, logo entraremos em contato  !";
    }

}
