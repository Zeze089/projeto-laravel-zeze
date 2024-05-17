@extends('layout')
@section('conteudo')
    <h1>  </h1>

    <form action="{{ route('produto.update' , ['id' => $produto->id])}}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="mb-3">

            <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome" 
            value="{{old('nome', $produto->nome)}}">
        </div>

        <div class="mb-3">

            <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição" 
            value="{{old('descricao', $produto->descricao)}}">
        </div>
        <div class="mb-3 ">
            <input type="number" name="preco" class="form-control" id="preco" placeholder="Preço" 
            value="{{old('preco', $produto->preco)}}">

        </div>
        <button type="submit" class="btn btn-primary">editar</button>
    </form>
@endsection
