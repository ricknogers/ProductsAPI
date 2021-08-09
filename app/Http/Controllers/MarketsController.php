<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Markets;

class MarketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $markets = Markets::latest()->paginate(5);
        return view('markets.index',compact('markets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('markets.create');

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
            'title' => 'required',
            'description'=> 'required',
            'linkedin_url'=> 'required',
            'order_number'=> 'required',


        ]);
        Markets::create($request->all());

        return redirect()->route('markets.index')
            ->with('success','Market created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Markets  $markets
     * @return \Illuminate\Http\Response
     */
    public function show(Markets  $markets)
    {
        return view('markets.show', compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Markets  $markets
     * @return \Illuminate\Http\Response
     */
    public function edit(Markets  $markets)
    {
        $markets = Markets::findOrFail($markets);
        return view('markets.edit', compact('markets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Markets  $markets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Markets $markets)
    {
        $updateData = $request->validate([
            'title' => 'required',
            'description'=> 'required',
            'linkedin_url'=> 'required',
            'order_number'=> 'required',

        ]);
        $markets->update($request->all());
        return redirect()->route('markets.index')
            ->with('success','Market updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Markets  $markets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $markets->delete();

        return redirect()->route('markets.index')
            ->with('success','Market deleted successfully');
    }
}
