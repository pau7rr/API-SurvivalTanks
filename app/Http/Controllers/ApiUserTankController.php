<?php

namespace App\Http\Controllers;

use App\Models\UserTank;

use Illuminate\Http\Request;

class ApiUserTankController extends Controller
{
    public function getUserTank(Request $request) {
        return UserTank::find($request->user_tank_id);
    }

    public function sumStrength(Request $request) {
        
        $userTank = UserTank::where('id', $request->user_tank_id)->first();

        $newStrength = $userTank->strengh + 10;

        $userTank->update(['strengh' => $newStrength]);
       
        return response()->json($userTank);
       
    }
    
    public function sumHealth(Request $request) {
        
        $userTank = UserTank::where('id', $request->user_tank_id)->first();

        $newHealth = $userTank->health + 10;

        $userTank->update(['health' => $newHealth]);
       
        return response()->json($userTank);
       
    }
}
