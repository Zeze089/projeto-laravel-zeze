<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Produto;

class ProdutosController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        
        return view('produtos.index', compact(
            'produtos'
        ));
}
}


