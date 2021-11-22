<?php

namespace App\Http\Controllers;

use App\Models\Devlog;
use Illuminate\Http\Request;

class DevlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devlogs = Devlog::latest()->paginate(6);

        return view('devlogs.devlogs',compact('devlogs'))->with('i', (request()->input('page', 1) - 1) * 5);
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
     * @param  \App\Models\Devlog  $devlog
     * @return \Illuminate\Http\Response
     */
    public function show(Devlog $devlog)
    {
        // 
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devlog  $devlog
     * @return \Illuminate\Http\Response
     */
    public function edit(Devlog $devlog)
    {
        return view('devlogs.edit', compact('devlog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Devlog  $devlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devlog $devlog)
    {
        $request->validate([
            'title',
            'slug',
            'version',
            'summary',
            'content',
            'publication_date',
            'thumbnail_url',    
            'image_url'
        ]);

        $devlog->update($request->all());
        
        return redirect()->route('devlogs.index')->with('success','Devlog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devlog  $devlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devlog $devlog)
    {
        //
    }
}
