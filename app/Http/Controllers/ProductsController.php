<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Log;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::paginate(20);
        return view('CRUD.index',compact('products'));   
    }

    public function create () 
    {
        return view ('CRUD.create');
    }

    public function store(ProductRequest $request)
    {
        Products::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function edit(Products $product)
    {
        return view('CRUD.edit', compact('product'));
    }
    public function update(ProductRequest $request,Products $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product update successfully');
    }
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product delete successfully');


    }
}
