<?php

namespace App\Http\Controllers;

use App\Male;
use Illuminate\Http\Request;

class MaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Forms.male');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $male = new Male();

        $male->chest_round = $request->input('chest_round');
        $male->shoulder = $request->input('shoulder');
        $male->back = $request->input('back');

        $male->short_armhole = $request->input('short_armhole');
        $male->sleeve_length = $request->input('sleeve_length');
        $male->sleeve_round = $request->input('sleeve_round');

        $male->long_armhole = $request->input('long_armhole');
        $male->long_sleeve_round = $request->input('long_sleeve_round');
        $male->long_sleeve_length = $request->input('long_sleeve_length');
        $male->elbow_round = $request->input('elbow_round');
        $male->wrist_round = $request->input('wrist_round');
        $male->shoulder_elbow = $request->input('shoulder_elbow');
        $male->elbow_wrist = $request->input('elbow_wrist');

        $male->buttom = $request->input('inputState');
        $male->waist_knee_length = $request->input('waist_knee_length');
        $male->knee_feet_length = $request->input('knee_feet_length');
        $male->waist_round = $request->input('waist_round');
        $male->knee_round = $request->input('knee_round');
        $male->ankle_round = $request->input('ankle_round');

        $male->save();
        
        return response()->json( ['success' => 'data added successfully!'] );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Male  $male
     * @return \Illuminate\Http\Response
     */
    public function show(Male $male)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Male  $male
     * @return \Illuminate\Http\Response
     */
    public function edit(Male $male)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Male  $male
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Male $male)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Male  $male
     * @return \Illuminate\Http\Response
     */
    public function destroy(Male $male)
    {
        //
    }
}
