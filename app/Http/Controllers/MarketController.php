<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['market'] = Market::orderBy('id','asc')->paginate(5);

        return view('market.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('market.create');

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
            'marketName' => 'required',
            'description' => 'required',
            'marketImage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'linkedinURL' => 'required',
            'orderNumber' => 'required'
        ]);
        $path = $request->file('marketImage')->store('public/storage/images/uploads/');
        $market = new Market;
        $market->marketName = $request->marketName;
        $market->description = $request->description;
        $market->marketImage = $path;
        $market->linkedinURL = $request->linkedinURL;
        $market->orderNumber = $request->orderNumber;
        $market->save();

//        Market::create($request->all());

        return redirect()->route('market.index')->with('success','Market created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function show(Market $market)
    {
        return view('market.show',compact('market'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $market = Market::find($id);
        return view('market.edit', compact('market'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $market = Market::find($id);


        $request->validate([
            'marketName' => 'required',
            'description' => 'required',
            'linkedinURL' => 'required',
            'orderNumber' => 'required'
        ]);



        if($request->hasFile('marketImage')){
            $request->validate([
                'marketImage' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            ]);
            $path = $request->file('marketImage')->store('public/storage/images/uploads/');
            $market->marketImage = $path;
        }
        $market->marketName = $request->marketName;
        $market->description = $request->description;
        $market->linkedinURL = $request->linkedinURL;
        $market->orderNumber = $request->orderNumber;
        $market->save();

        $market->update($request->all());

        return redirect()->route('market.index')->with('success','Market updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Market  $market
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $market = Market::find($id);

        $market->delete();

        return redirect()->route('market.index')
            ->with('success','Market deleted successfully');
    }
}
