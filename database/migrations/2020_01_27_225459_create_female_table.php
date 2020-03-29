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

            // $table->integer('customer_id')->default(1);

            $table->string('top_sleeve_length');
            
            $table->string('burst_round');
            $table->string('shoulder');
            $table->string('back');
            $table->string('under_burst_round');
            $table->string('end_to_end_nipple_length');
            $table->string('waist_round');
            $table->string('shoulder_elbow');
            $table->string('elbow_wrist');
            $table->string('elbow_round');

            $table->string('sleeve_round');

            $table->string('buttom');


            //Sleeves
            // $table->string('armhole');
            $table->string('sleeve_length');
            $table->string('wrist_round');
            // $table->string('shoulder_elbow');
            // $table->bigInteger('knee_feet_length');

            //Trousers & short
            $table->string('hip_round')->nullable();
            $table->string('hip_length')->nullable();
            $table->string('thigh_round')->nullable();
            $table->string('knee_round')->nullable();
            $table->string('ankle_round')->nullable();
            $table->string('waist_knee_length')->nullable();
            $table->string('knee_feet_length')->nullable();

            // $table->string('trouser_length'); //a select listing 3/4, short or knee length
            $table->string('skirt')->nullable(); //select - long, midi, and mini skirt
            $table->string('skirt_hip_round')->nullable();
            $table->string('skirt_hip_length')->nullable();

            $table->string('short_hip_round')->nullable();
            $table->string('short_hip_length')->nullable();
            $table->string('short_thigh_round')->nullable();
            $table->string('short_knee_round')->nullable();
            $table->string('short_ankle_round')->nullable();
            $table->string('short_waist_knee_length')->nullable();
            $table->string('short_knee_feet_length')->nullable();
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
