<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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

        $request->validate([
            'name' => 'required',
            'price' => 'required'
        ]);

        $product = new Product();

        $product->name = $request-> name;
        $product->price = $request-> price;

        $product->save();

        return redirect()->route('product.show', $product);
    }

    public function show(Product $product){
        return view('products.show', compact('product'));
    }

    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product){
        $product->name = $request-> name;
        $product->price = $request-> price;

        $product->save();

        return redirect()->route('product.show', $product);
    }

}
