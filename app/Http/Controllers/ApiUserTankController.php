<?php

namespace App\Http\Controllers;

use App\Models\UserTank;

use Illuminate\Http\Request;

class ApiUserTankController extends Controller
{
    public function getUserTank(Request $request) {
        return UserTank::find($request->user_tank_id);
    }
}
