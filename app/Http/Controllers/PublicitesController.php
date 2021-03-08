<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Images;
use Illuminate\Http\Request;
use App\Publicites;
use Image;

class PublicitesController extends Controller
{
	public function index()
    {
        return view ('publicites.publicites')->with([
            'pubs'    => Publicites::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
    	$request->validate([
            'pub_title' => 'required',
            'pub_url' => 'required'
        ]);


        if($request->hasFile('pub_url')) {
            $image = $request->file('pub_url');
            $filename = time().'.'.$image->getClientOriginalExtension();
            \Intervention\Image\Facades\Image::make($image)
                ->resize(600, 300 )
                ->save(public_path($filename));
            //$path = $image->store('public');
            $pub = new Publicites();
            $pub->title = $request->get('pub_title');
            $pub->url = $filename;
            $pub->save();
            return back()->with('message', 'Successfully added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('publicites.publicite')->with([
            'pub' => Publicites::find($id)
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
