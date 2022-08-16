@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>
        hola soy el create
    </h1>
    <form action="{{route('productos.store')}}" method="POST">

        @csrf

        <label>
            Nombre del producto:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Precio del producto:
            <br>
            <input type="number" name="price">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection