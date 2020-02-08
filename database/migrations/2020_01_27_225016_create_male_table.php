<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('male', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('chest_round');
            $table->string('shoulder');
            $table->string('back');
            $table->string('short_armhole');
            $table->string('sleeve_length');
            $table->string('sleeve_round');
            $table->string('long_armhole');
            $table->string('long_sleeve_round');
            $table->string('long_sleeve_length');
            $table->string('elbow_round');
            $table->string('wrist_round');
            $table->string('shoulder_elbow_length');
            $table->string('elbow_wrist');
            $table->string('buttom');
            $table->string('waist_knee_length');
            $table->string('knee_feet_length');
            $table->string('thigh_round');
            $table->string('waist_round');
            $table->string('knee_round');
            $table->string('ankle_round');
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
        Schema::dropIfExists('male');
    }
}
