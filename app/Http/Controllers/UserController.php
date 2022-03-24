<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        //Compact data sent to view
        $data = [
            'users' => $users
        ];
        return view('users.users', $data);
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
        //
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
        $user = User::find($id);
        $data = [
            'user' => $user
        ];
        return view('users.edit', $data);
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
        //Validate request
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'user_tank_id' => 'required',
            'coins' => 'required',
        ]);

        //Search tank instance in DB
        $user = User::find($id);

        if ($user) {
            //Update into DB
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->user_tank_id = $request->input('user_tank_id');
            $user->coins = $request->input('coins');
            if ($request->input('banned')) {
                $user->banned = true;
            } else {
                $user->banned = false;
            }
            $user->update();

            return redirect('users')->with('success', 'User successfully updated');
        } else {
            return redirect('users')->with('fail', 'User could not be updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Search and Delete in DB
        $user = User::find($id);
        $user->delete();

        //Redirect
        if ($user) {
            return redirect('users')->with('success', 'User successfully deleted');
        } else {
            return redirect('users')->with('fail', 'User could not be deleted');
        }
    }
}
