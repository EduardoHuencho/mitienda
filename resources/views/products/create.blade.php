@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>
        hola soy el create
    </h1>
    <form action="{{route('product.store')}}" method="POST">

        @csrf

        <label>
            Nombre del producto:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
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
            <input type="text" name="price" value="{{old('price')}}">
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