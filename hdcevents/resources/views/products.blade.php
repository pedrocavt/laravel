@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <h1>Produtos</h1>

    @if($busca != '')
    <p>O usuário esta buscando por {{$busca}}</p>
    @endif
@endsection