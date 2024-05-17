<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function edit($id){
        $produto = Produto::find($id);
        return view('produtos.edit',compact('produto'));
    }
    public function update(Request $request, $id){
        $validate = $request->validate(
            [
               'nome' => 'required|max:50' , 
               'descricao' => 'required|max:255',
               'preco' => 'required'
            ]
            );

            DB::beginTransaction();
            
            $produto = Produto::find($id);
            $produto->nome = $request->input('nome');
            $produto->descricao = $request->input('descricao');
            $produto->preco = $request->input('preco');
            $produto->save();

            DB::commit();

            return view('produtos.edit',compact(
                'produto'

            ));
    }
}

