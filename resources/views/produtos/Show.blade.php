@extends('layout')
@section('conteudo')


<div class="conteiner">
<div class="row">
    <div class="col-lg-4">
        <div class="form">
            <h4>{{$produto->nome}}</h4>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form">
            <h4>{{$produto->descricao}}</h4>
        </div>
    </div>
   
    <div class="col-lg-4">
        <div class="form">
            <h4>{{$produto->preco}}</h4>
        </div>
    </div>
</div>
</div>

@endsection

