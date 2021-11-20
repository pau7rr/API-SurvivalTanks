<?php

namespace App\Http\Controllers\Administrative;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DevlogController extends Controller
{
    function devlog() {
        return view('administrative.devlog');
    }
}
