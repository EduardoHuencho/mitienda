<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function show($producto){
        return view('products.show', compact('producto'));
    }

    public function create(){
        return view('products.create');
    }

}
