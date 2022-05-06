<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ApiTankController extends Controller
{
    public function getAlltanks(){

          $tanks = Tank::all();
    
          return response()->json([
    
            'success' => true,
    
            'data' => $tanks
    
          ]);
    
          return response()->json([
    
            'success' => false,
    
            'message' => 'Unable to Login'
    
          ]);    
      }
}
