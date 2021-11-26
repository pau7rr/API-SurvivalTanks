<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create(
            [
                "username" => "david",
                "password" => Hash::make('1234')
            ]            
        );
        Admin::create(
            [
                "username" => "pau7rr",
                "password" => Hash::make('1234')
            ],
        );
        Admin::create(
            [
                "username" => "honrix",
                "password" => Hash::make('1234')
            ],
        );
        Admin::create(
            [
                "username" => "fontal",
                "password" => Hash::make('1234')
            ],
        );
    }
}
