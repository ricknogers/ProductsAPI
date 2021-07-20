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
	    $products = Products::all();
        return view('products.index', compact('products'));
        
      


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
	    
	     $storeData = $request->validate([
            'name' => 'required',
            'application' => 'required',
            'market_association' => 'required',
            'product_category'=> 'required',
            'description_uses'=> 'required',

        ]);
        $products = Products::create($storeData);

        return redirect('/products')->with('completed', 'Product has been saved!');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        return view('products.show', compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
	    $products = Products::findOrFail($id);
        return view('products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
	    
	    $updateData = $request->validate([
             'name' => 'required',
            'application' => 'required',
            'market_association' => 'required',
            'product_category'=> 'required',
            'description_uses'=> 'required',

        ]);
        Products::whereId($id)->update($updateData);
        return redirect('/products')->with('completed', 'Product has been updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
	     $products = Products::findOrFail($id);
        $products->delete();

        return redirect('/products')->with('completed', 'Products has been deleted');
        
        $products->delete();

        return redirect()->route('products.index')
            ->with('success', 'Products deleted successfully');
    }
}
