<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contatos;

class ContatosController extends Controller
{
    public function mostrarContatos(){
        $dadosContatos = Contatos::all();
        return view('index', ['dadosContatos' => $dadosContatos]);
    }

    public function cadastrarContato(Request $request){
        $dados = $request->validate([
            'nome' => 'string',
            'fone' => 'string',
            'email' => 'string',
            'bio' => 'string',
        ]);

        Contatos::create($dados);

        return redirect('/');
    }
}
