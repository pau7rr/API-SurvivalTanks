<?php

namespace Database\Seeders;
use App\Models\UserTank;

use Illuminate\Database\Seeder;

class UserTankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserTank::create(
            [
                'strengh' => 5,
                'health' => 5,
                'speed' => 5,
                'tower' => '../assets/tankConstructor/TowerEdits/Light1.png',
                'body' => '../assets/tankConstructor/Hulls/SmallHullA.png',
                'track' => '../assets/tankConstructor/Tracks/TrackAFrame1.png',
                'bullet' => '../assets/tankConstructor/Bullets/01.png',
            ]            
        );
        UserTank::create(
            [
                'strengh' => 5,
                'health' => 5,
                'speed' => 5,
                'tower' => '../assets/tankConstructor/TowerEdits/Light1.png',
                'body' => '../assets/tankConstructor/Hulls/SmallHullA.png',
                'track' => '../assets/tankConstructor/Tracks/TrackAFrame1.png',
                'bullet' => '../assets/tankConstructor/Bullets/01.png',
            ]            
        );
        UserTank::create(
            [
                'strengh' => 5,
                'health' => 5,
                'speed' => 5,
                'tower' => 'http://localhost:8000/assets/tankConstructor/TowerEdits/Light2.png',
                'body' => 'http://localhost:8000/assets/tankConstructor/TowerEdits/Light2.png',
                'track' => 'http://localhost:8000/assets/tankConstructor/TowerEdits/Light2.png',
                'bullet' => 'http://localhost:8000/assets/tankConstructor/TowerEdits/Light2.png',
            ]            
        );
        UserTank::create(
            [
                'strengh' => 5,
                'health' => 5,
                'speed' => 5,
                'tower' => 'http://localhost:8000/assets/tankConstructor/TowerEdits/Light2.png',
                'body' => 'http://localhost:8000/assets/tankConstructor/TowerEdits/Light2.png',
                'track' => 'http://localhost:8000/assets/tankConstructor/TowerEdits/Light2.png',
                'bullet' => 'http://localhost:8000/assets/tankConstructor/TowerEdits/Light2.png',
            ]            
        );
    }
}
