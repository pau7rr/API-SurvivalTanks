<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'argos16',
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('1234'),
                'user_tank_id' => 1,
                'coins' => 10,
            ]            
        );
        User::create(
            [
                'name' => 'honrixxx',
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('1234'),
                'user_tank_id' => 2,
                'coins' => 10,
            ]            
        );
        User::create(
            [
                'name' => 'pablaso69',
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('1234'),
                'user_tank_id' => 3,
                'coins' => 10,
            ]            
        );
        User::create(
            [
                'name' => 'sualejandro19',
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('1234'),
                'user_tank_id' => 4,
                'coins' => 10,
            ]            
        );
    }
}
