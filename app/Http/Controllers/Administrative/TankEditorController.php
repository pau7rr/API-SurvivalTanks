<?php

namespace App\Http\Controllers\Administrative;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TankEditorController extends Controller
{
    function tankEditor() {
        return view('administrative.tankEditor');
    }
}
