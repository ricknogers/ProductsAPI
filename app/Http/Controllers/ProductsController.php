<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::latest()->paginate(5);
        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'application' => 'required',
            'market_id' => 'required',
            'product_category' => 'required',
            'product_range' => 'required',
            'description_uses' => 'required'
        ]);

        Products::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        return view('products.show', compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @param  \App\Products $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        $products = Products::find($products);
        return view('products.edit')->with('Products', $products);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        $request->validate([
            'name' => 'required',
            'application' => 'required',
            'market_id' => 'required',
            'product_category' => 'required',
            'product_range' => 'required',
            'description_uses' => 'required'
        ]);
        $products->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        $products->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
