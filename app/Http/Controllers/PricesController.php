<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Prices;
use App\Services;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PricesController extends Controller
{
    public function create()
    {
        //
    }
    public function index()
    {
        return view('prices.prices')->with([
        	'prices'	=> Prices::all()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'price_item' => 'required',
            'parent_service'    => 'required'
        ]);

        $price = new Prices();
        $price->item = $request->get('price_item');
        $price->parent_service = $request->get('parent_service');
        $price->save();
        return redirect()->back()->with('message', 'Price have been successful added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|Response|View
     */
    public function show($id)
    {
        $price = Prices::find($id);
        $parent_service = $price->parent_service;
        return view('prices.price')->with([
            'price' => $price,
            'parent_service' => $parent_service
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    public function newPrice()
    {
        $services = Services::all();
        return view('prices.new-price')->with([
            'services'  => $services
        ]);
    }
}
