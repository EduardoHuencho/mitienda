<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Http\Requests\StoreProduct;

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

    public function store(StoreProduct $request){

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

        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric|integer|min:3'
        ]);

        $product->name = $request-> name;
        $product->price = $request-> price;

        $product->save();

        return redirect()->route('product.show', $product);
    }

}
