<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::orderBy('id', 'desc')->paginate();
        //return $products;

        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $producto = new Product();

        $producto->name = $request-> name;
        $producto->price = $request-> price;

        $producto->save();

        return redirect()->route('producto.show', $producto);
    }

    public function show($id){
        $producto = Product::find($id);
        
        return view('products.show', compact('producto'));
    }

}
