<?php

namespace App\Http\Controllers;
use App\Models\SoloStats;

use Illuminate\Http\Request;

class ApiStatsController extends Controller
{
    public function updateSoloStats(Request $request) {
        $this->validate($request, [
            'user_id' => 'required|integer',
            'round' => 'required|integer',
            'kills' => 'required|integer',
        ]);
        
        $soloStats = SoloStats::find($request->user_id);
        $soloStats->games += 1;
        $soloStats->kills += $request->kills;
        if ($request->round > $soloStats->highest_round) {
            $soloStats->highest_round = $request->round;
        }
        
        $soloStats->save();
        return response()->json($soloStats, 201);
        
    }

    public function updateMultiplayerStats() {

        $this->validate($request, [
            'user_id' => 'required|integer',
            'games' => 'required|integer',
            'round' => 'required|integer',
            'kills' => 'required|integer',
        ]);

        $soloStats = SoloStats::find($request->user_id);
        $soloStats->games += 1;
        $soloStats->kills += $request->kills;
        if ($request->round > $soloStats->highest_round) {
            $soloStats->highest_round = $request->round;
        }
        
        $soloStats->save();
        return response()->json($soloStats, 201);
    }
}
