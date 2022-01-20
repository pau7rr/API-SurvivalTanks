<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    /**

   * Register api.

   *

   * @return \Illuminate\Http\Response

   */

  public function register(Request $request)

  {

    $validator = Validator::make($request->all(), [

      'name' => 'required',

      'email' => 'required|email|unique:users',

      'password' => 'required',

    ]);

    if ($validator->fails()) {

     return response()->json([

      'success' => false,

      'message' => $validator->errors(),

     ], 401);

    }

    $input = $request->all();

    $input['password'] = bcrypt($input['password']);

    $user = User::create($input);

    $success['token'] = $user->createToken('appToken')->accessToken;

    return response()->json([

     'success' => true,

     'token' => $success,

     'user' => $user

   ]);

  }

  public function login()

  {

    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

      $user = Auth::user();

      dd($user);

      $success['token'] = $user->createToken('appToken')->accessToken;

      //After successfull authentication, notice how I return json parameters

      return response()->json([

       'success' => true,

       'token' => $success,

       'user' => $user

     ]);

    } else {

    //if authentication is unsuccessfull, notice how I return json parameters

     return response()->json([

      'success' => false,

      'message' => 'Invalid Email or Password',

    ], 401);

    }

  }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
