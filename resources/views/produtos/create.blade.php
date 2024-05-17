@extends('layout')
@section('conteudo')
    <h1>  </h1>

    <form action="{{ route('produto.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="mb-3">

            <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">

            <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição">
        </div>
        <div class="mb-3 ">
            <input type="number" name="preco" class="form-control" id="preco" placeholder="Preço">

        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
@endsection
