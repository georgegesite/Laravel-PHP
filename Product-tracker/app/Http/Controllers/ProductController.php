<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\Product;

class ProductController extends Controller // Added a Controller
{
    //create a function in controller
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]); // pass data to frontend
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([ //validate the data first
            'name' => 'required',
            'qty' => 'required|numeric',
            'description' => 'nullable',
            'price' => 'required|decimal:2',
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }
    public function update(Product $product, Request $request)
    {
        $data = $request->validate([ //validate the data first
            'name' => 'required',
            'qty' => 'required|numeric',
            'description' => 'nullable',
            'price' => 'required|decimal:2',
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('sucess', "Successfully updated");
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'))->with('sucess', "Successfully deleted");
    }
}
