@extends('layouts.plantilla')

@section('title', 'show')

@section('content')
    <h1>
        hola soy show {{$product->name}}
    </h1>
    <a href="{{route('products.index')}}">Volver al inicio</a>
    <br>
    <a href="{{route('product.edit', $product)}}">Editar producto</a>
@endsection
