<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Produto;

class CreateController extends Controller
{
    public function create()
    {
      return view('produtos.create');
    }

    public function store(Request $request) {
        $validated = $request->validate(
            [
                'nome' => 'required|max:50',
                'descricao' => 'required',
                'preco' => 'required',
            ],
        );

        DB::beginTransaction();

        // CADASTRO A EQUIPE

        $produtos = new Produto();
        $produtos->nome = $request->input('nome');
        $produtos->descricao = $request->input('descricao');
        $produtos->preco = $request->input('preco');
        $produtos->save();

        DB::commit();

        return view('produtos.show', compact(
            'produtos'
        ));


    }

        
}
