<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Produto;
use Illuminate\Support\Facades\DB;

class DestroyController extends Controller
{
   public function destroy($id)
   {
    DB::beginTransaction();

    
        $produtos = Produto::find($id);
        if(!$produtos)
            return redirect(route('produto.index'))->with(
                'error',
                'Entre em contato com o suporte ligue 4002-8922'
            );

            $produtos->delete();
            DB::commit();
            
            return view('produtos.index',compact(
                'produtos'
            ));
   } 
}
