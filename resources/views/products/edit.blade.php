@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>
        hola soy el edit
    </h1>
    <form action="{{route('product.update', $product)}}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre del producto:
            <br>
            <input type="text" name="name" value="{{$product->name}}">
        </label>
        <br>
        <label>
            Precio del producto:
            <br>
            <input type="number" name="price" value="{{$product->price}}">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="{{route('products.index')}}">Volver</a>
@endsection