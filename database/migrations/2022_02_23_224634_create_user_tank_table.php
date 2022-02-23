<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tank', function (Blueprint $table) {
            $table->id();
            $table->integer('strengh');
            $table->integer('health');
            $table->integer('speed');
            $table->string('tower', 255);
            $table->string('body', 255);
            $table->string('track', 255);
            $table->string('bullet', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tank');
    }
}
