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
            <input type="text" name="name" value="{{old('name', $product->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Precio del producto:
            <br>
            <input type="number" name="price" value="{{old('price', $product->price)}}">
        </label>
        @error('price')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="{{route('products.index')}}">Volver</a>
@endsection