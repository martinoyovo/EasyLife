<?php

namespace App\Http\Controllers;

use App\Publicites;
use Illuminate\Http\Request;
use App\ModePayments;
class ModePaymentsController extends Controller
{
    public function create()
    {
        //
    }
    public function index()
    {
        return view('mode_payments.mode_payments')->with([
            'mode_payments'	=> ModePayments::all()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'mode_payment' => 'required'
        ]);

        $payment = new ModePayments();
        $payment->payment_type = $request->get('mode_payment');
        $payment->save();
        return back()->with('message', 'Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('mode_payments.mode_payment')->with([
            'payment_type' => ModePayments::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
