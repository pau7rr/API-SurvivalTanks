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

    public function sumStrength(Request $request) {
        
        $userTank = UserTank::where('id', $request->user_tank_id)->first();

        $newStrength = $userTank->strengh + 5;

        $userTank->update(['strengh' => $newStrength]);
       
        return response()->json($userTank);
       
    }
    
    public function sumHealth(Request $request) {
        
        $userTank = UserTank::where('id', $request->user_tank_id)->first();

        $newHealth = $userTank->health + 10;

        $userTank->update(['health' => $newHealth]);
       
        return response()->json($userTank);
       
    }
    
    public function sumSpeed(Request $request) {
        
        $userTank = UserTank::where('id', $request->user_tank_id)->first();

        $newSpeed = $userTank->speed + 1;

        $userTank->update(['speed' => $newSpeed]);
       
        return response()->json($userTank);
       
    }
}
