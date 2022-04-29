<?php

namespace App\Http\Controllers;

use App\Models\UserTank;
use Illuminate\Http\Request;

class UserTankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usertanks = UserTank::get();

        //Compact data sent to view
        $data = [
            'usertanks' => $usertanks
        ];
        return view('usertanks.index', $data);
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
        $usertank = UserTank::find($id);
        
        $data = [
            'usertank' => $usertank
        ];
        return view('usertanks.edit', $data);
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
            'id' => 'required',
            'health' => 'required',
            'strengh' => 'required',
            'speed' => 'required',
            'bombs' => 'required',
            'regeneration' => 'required',
            'tower' => 'required',
            'body' => 'required',
            'track' => 'required',
            'bullet' => 'required',
        ]);

        //Search tank instance in DB
        $usertank = UserTank::find($id);

        if ($usertank) {
            //Update into DB
            $usertank->id = $request->input('id');
            $usertank->health = $request->input('health');
            $usertank->strengh = $request->input('strengh');
            $usertank->speed = $request->input('speed');
            $usertank->tower = $request->input('tower');
            $usertank->body = $request->input('body');
            $usertank->track = $request->input('track');
            $usertank->bullet = $request->input('bullet');

            $usertank->update();

            return redirect()->route('usertanks.index')->with('success', 'Usertank successfully updated');
        } else {
            return redirect()->route('usertanks.index')->with('fail', 'Usertank could not be updated');
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
        $usertank = UserTank::find($id);
        $usertank->delete();

        //Redirect
        if ($usertank) {
            return redirect()->route('usertanks.index')->with('success', 'Usertank successfully deleted');
        } else {
            return redirect()->route('usertanks.index')->with('fail', 'Usertank could not be deleted');
        }
    }
}
