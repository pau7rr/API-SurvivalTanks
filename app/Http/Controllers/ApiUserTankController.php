<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserTank;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ApiUserTankController extends Controller
{
    public function getUserTank() {

        if (Auth::user()) {

            $userId = Auth::id();
            
            $user = User::all()->where('id', $userId)->first();

            return UserTank::find($user->user_tank_id);
          
        } else {
      
            return response()->json([
      
              'success' => false,
      
              'message' => 'Unable to get User Tanks'
      
            ]);
      
          }
        
    }

    public function sumStrength() {

        if (Auth::user()) {

            $userId = Auth::id();
            
            $user = User::all()->where('id', $userId)->first();

            $userTank = UserTank::find($user->user_tank_id);

            $newStrength = $userTank->strengh + 5;

            $userTank->update(['strengh' => $newStrength]);
           
            return response()->json($userTank);
          
        } else {
      
            return response()->json([
      
              'success' => false,
      
              'message' => 'Unable to sum strengt'
      
            ]);
      
        } 
    }
    
    public function sumHealth() {

        if (Auth::user()) {

            $userId = Auth::id();
            
            $user = User::all()->where('id', $userId)->first();

            $userTank = UserTank::find($user->user_tank_id);

            $newHealth = $userTank->health + 10;

            $userTank->update(['health' => $newHealth]);
           
            return response()->json($userTank);
          
        } else {
      
            return response()->json([
      
              'success' => false,
      
              'message' => 'Unable to sum health'
      
            ]);
      
        }
    }
    
    public function sumSpeed() {

        if (Auth::user()) {

            $userId = Auth::id();
            
            $user = User::all()->where('id', $userId)->first();

            $userTank = UserTank::find($user->user_tank_id);

            $newSpeed = $userTank->speed + 1;

            $userTank->update(['speed' => $newSpeed]);
           
            return response()->json($userTank);
          
        } else {
      
            return response()->json([
      
              'success' => false,
      
              'message' => 'Unable to sum speed'
      
            ]);
      
        }
    }
}
