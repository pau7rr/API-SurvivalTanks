<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tank;

class ApiTankController extends Controller
{
    public function getAlltanks(){

      $tanks = Tank::get();

          return response()->json([
    
            'success' => true,
    
            'data' => $tanks
    
          ]); 
      }
}
