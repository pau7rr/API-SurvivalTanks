<?php

namespace App\Http\Controllers;
use App\Models\SoloStats;
use App\Models\MultiplayerStats;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ApiStatsController extends Controller
{
    public function updateSoloStats(Request $request) {
        

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'round' => 'required|integer',
            'kills' => 'required|integer',
            'time_played' => 'required|integer',
            'shots' => 'required|integer',
            'successful_shots' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }
        
        $soloStats = SoloStats::find($request->user_id);
        $soloStats->games += 1;
        $soloStats->kills += $request->kills;
        $soloStats->time_played += $request->time_played;
        $soloStats->shots += $request->shots;
        $soloStats->successful_shots += $request->successful_shots;

        if ($request->round > $soloStats->highest_round) {
            $soloStats->highest_round = $request->round;
        }
        
        $soloStats->save();
        return response()->json($soloStats, 201);
        
    }

    public function updateMultiplayerStats(Request $request) {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'kills' => 'required|integer',
            'deaths' => 'required|integer',
            'time_played' => 'required|integer',
            'shots' => 'required|integer',
            'successful_shots' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 401);
        }
        
        $multiplayerStats = MultiplayerStats::find($request->user_id);
        dd($multiplayerStats);
        $multiplayerStats->games += 1;
        $multiplayerStats->kills += $request->kills;
        $multiplayerStats->deaths += $request->deaths;
        $multiplayerStats->time_played += $request->time_played;
        $multiplayerStats->shots += $request->shots;
        $multiplayerStats->successful_shots += $request->successful_shots;

        
        
        $multiplayerStats->save();
        return response()->json($multiplayerStats, 201);
    }
}
