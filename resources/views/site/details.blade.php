
@extends('site/layout')

@section('title', 'Pagina Home')

@section('conteudo')

    <div class="row container">
        
        <p> Produto: </p> {{ $produto->nome }}

    </div>

@endsection
