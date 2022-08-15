<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::paginate();
        //return $products;

        return view('products.index', compact('products'));
    }

    public function show($id){
        $producto = Product::find($id);
        
        return view('products.show', compact('producto'));
    }

    public function create(){
        return view('products.create');
    }

}
