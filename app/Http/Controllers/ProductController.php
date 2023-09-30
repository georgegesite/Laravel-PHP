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
        return view('products.index');
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
}
