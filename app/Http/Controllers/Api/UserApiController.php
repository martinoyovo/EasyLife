<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Http\Resources\TokenResource;
use App\Http\Resources\UserCommandsResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\UsersResource;
use App\Post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();
        return new UsersResource($users);
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
     * @return UserResource|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'code' => 'required'
        ]);
        $user = new User();
        $user->name = $request->get('name');
        $user->phone = $request->get('phone_number');
        $user->code = $request->get('code');
        $user->save();
        return new UserResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return UserResource
     */
    public function show($id)
    {
        return new UserResource(User::find($id));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if( $request->has('name') ){
            $user->name = $request->get( 'name' );
        }
        if($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            \Intervention\Image\Facades\Image::make($image)
                ->resize(600, 600)
                ->save(public_path($filename));
            $user->avatar = $filename;
        }

        $user->save();
        return UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return UserResource
     */
    public function destroy($id)
    {
        $user = User::find( $id );
        $user->delete();
        return new UserResource( $user );
    }

    public function commands( $id ){
        $user = User::find( $id );
        $commands = $user->commands();
        return new UserCommandsResource( $commands);
    }

    public function getToken( Request $request ){
        $request->validate( [
            'name' => 'required',
            'code' => 'required',
            'phone_number'  => 'required'
        ]);
        $credentials = $request->only( 'name' , 'phone_number', 'code' );
        if( Auth::attempt( $credentials ) ){
            $user = User::where( 'phone' , $request->get( 'phone_number' ) )->first();
            return new TokenResource( [ 'token' => $user->api_token] );
        }
        return 'not found';
    }
}
