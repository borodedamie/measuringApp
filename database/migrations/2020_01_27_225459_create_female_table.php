<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFemaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('female', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('burst_round');
            $table->string('shoulder');
            $table->string('back');
            $table->string('under_burst_round');
            $table->string('end_to_end_nipple_length');
            $table->string('waist_round');
            // $table->string('shoulder_elbow');
            $table->string('elbow_wrist');
            $table->string('elbow_round');

            $table->string('sleeve_round');

            //Sleeves
            // $table->string('armhole');
            $table->string('sleeve_length');
            $table->string('wrist_round');
            $table->string('shoulder_elbow');
            // $table->bigInteger('knee_feet_length');

            //Trousers & short
            $table->string('hip_round');
            $table->string('hip_length');
            $table->string('thigh_round');
            $table->string('knee_round');
            $table->string('ankle_round');
            $table->string('waist_knee_length');
            $table->string('knee_feet_length');

            // $table->string('trouser_length'); //a select listing 3/4, short or knee length
            $table->string('skirt'); //select - long, midi, and mini skirt
            $table->string('skirt_hip_round');
            $table->string('skirt_hip_length');

            $table->string('short_hip_round');
            $table->string('short_hip_length');
            $table->string('short_thigh_round');
            $table->string('short_knee_round');
            $table->string('shortt_ankle_round');
            $table->string('short_waist_knee_length');
            $table->string('short_knee_feet_length');
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
        Schema::dropIfExists('female');
    }
}
