<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ShowController extends Controller
{
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        if (!$produto)
        return redirect(route('produto.index'))->with(
            'error',
            'seu produto não existe perante as regras.'
        );

        return view('produtos.show',compact(
            'produto'
        ));
    }
}
