<?php

namespace App\Http\Controllers\Administrative;

use App\Models\Stats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(){
        $stats = Stats::get();
        //Compact data sent to view
        $data = [
            'stats' => $stats
        ];
        return view('administrative.dashboard', $data);}
}
