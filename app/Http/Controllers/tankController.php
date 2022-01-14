<?php

namespace App\Http\Controllers;

use App\Models\Tank;
use Illuminate\Http\Request;

class tankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanks = Tank::get();

        //Compact data sent to view
        $data = [
            'tanks' => $tanks
        ];
        return view('tanks.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tanks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //Validate request
        $this->validate($request, [
            'strengh' => 'required',
            'health' => 'required',
            'speed' => 'required',
            'tower' => 'required|max:255',
            'body' => 'required|max:255',
            'track' => 'required|max:255',
            'bullet' => 'required|max:255',
        ]);

        //Save into DB
        $tank = new Tank;
        $tank->strengh = $request->input('strengh');
        $tank->health = $request->input('health');
        $tank->speed = $request->input('speed');
        $tank->tower = $request->input('tower');
        $tank->body = $request->input('body');
        $tank->track = $request->input('track');
        $tank->bullet = $request->input('bullet');
        $tank->save();

        //Redirect
        if ($tank) {
            return redirect('tanks')->with('success', 'Tank successfully created');
        } else {
            return redirect('tanks/create')->with('fail', 'Tank could not be created');
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
        return view('tanks.edit');
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

        //Search tank instance in DB

        //Update into DB


        return view('tanks.create')->with('success', 'Tank successfully updated');
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
        $tank = Tank::find($id);
        $tank->delete();

        //Redirect
        if ($tank) {
            return redirect('tanks')->with('success', 'Tank successfully deleted');
        } else {
            return redirect('tanks')->with('fail', 'Tank could not be deleted');
        }
    }
}
