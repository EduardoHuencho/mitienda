<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return "Soy index producto";
    }

    public function show($producto){
        return "Soy show producto $producto";
    }

    public function create(){
        return "Soy create producto";
    }

}
