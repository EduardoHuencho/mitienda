@extends('layouts.plantilla')

@section('title', 'index')

@section('content')
    <h1>
        hola soy el index
    </h1>
    <a href="{{route('product.create')}}">Agregar un producto</a>
    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{route('product.show', $product->id)}}">{{$product->id}}_{{$product->name}}</a>
            </li>
        @endforeach
    </ul>
    
    {{$products->links()}}

@endsection