@extends('layouts.plantilla')

@section('title', 'show')

@section('content')
    <h1>
        hola soy show {{$producto->name}}
    </h1>
@endsection
