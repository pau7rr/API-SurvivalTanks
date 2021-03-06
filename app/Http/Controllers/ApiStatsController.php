<?php

namespace App\Http\Controllers;
use App\Models\SoloStats;
use App\Models\MultiplayerStats;
use App\Models\User;
use App\Models\Stats;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
        $soloStats = SoloStats::where('user_id', $request->user_id)->first();

        $soloStats->games += 1;
        $soloStats->kills += $request->kills;
        $soloStats->time_played += $request->time_played;
        $soloStats->shots += $request->shots;
        $soloStats->successful_shots += $request->successful_shots;

        if ($request->round > $soloStats->highest_round) {
            $soloStats->highest_round = $request->round;
        }
        
        $soloStats->save();

        updateGeneralStats();

        return response()->json($soloStats, 201);
        
    }

    public function updateMultiplayerStats(Request $request) {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'win' => 'required|boolean',
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
        $multiplayerStats->games += 1;
        $multiplayerStats->kills += $request->kills;
        $multiplayerStats->deaths += $request->deaths;
        $multiplayerStats->time_played += $request->time_played;
        $multiplayerStats->shots += $request->shots;
        $multiplayerStats->successful_shots += $request->successful_shots;
        if ($request->win) {
            $multiplayerStats->wins += 1;
        } else {
            $multiplayerStats->loses += 1;
        }

        
        
        $multiplayerStats->save();

        updateGeneralStats();
        
        return response()->json($multiplayerStats, 201);
    }

    public function getRoundsRanking() {

        $stats = SoloStats::orderBy('highest_round', 'DESC')->get();
        $arr = [];
        
        foreach ($stats as &$e) {

            $user = User::where('id', $e->user_id)->first(); 

            array_push($arr, (object) [
                'username' => $user->name,
                'highest_round' => $e->highest_round,
                'games_played' => $e->games,
                'kills' => $e->kills
            ]);
        }

        return response()->json($arr, 201);   
    }

    function updateGeneralStats() {
        $generalStats = Stats::first();
        $generalStats->games += 1;
        $generalStats->save();

    }
}
