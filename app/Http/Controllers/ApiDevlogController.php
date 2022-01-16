<?php

namespace App\Http\Controllers;

use App\Models\Devlog;
use Illuminate\Http\Request;

class ApiDevlogController extends Controller
{
    public function index()
    {
        return Devlog::all();
    }
    
}
