<?php

namespace App\Http\Controllers;

use App\Female;
use App\Customer;
use Illuminate\Http\Request;

class FemaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Forms.female');
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
    public function store($id, Request $request)
    {
        //
        // $customerID = Customer::findOrFail($id);

        // return $customerID;

        $female = new Female();

        $female->top_sleeve_length = $request->input('top_sleeve_length');

        $female->burst_round = $request->input('burst_round');
        $female->shoulder = $request->input('shoulder');
        $female->back = $request->input('back');

        $female->under_burst_round = $request->input('under_burst_round');
        $female->end_to_end_nipple_length = $request->input('end_to_end_nipple_length');
        $female->waist_round = $request->input('waist_round');

        $female->elbow_wrist = $request->input('elbow_wrist');
        $female->elbow_round = $request->input('elbow_round');
        $female->sleeve_round = $request->input('sleeve_round');
        $female->sleeve_length = $request->input('sleeve_length');
        $female->wrist_round = $request->input('wrist_round');
        $female->elbow_wrist = $request->input('elbow_wrist');
        $female->shoulder_elbow = $request->input('shoulder_elbow');

        $female->buttom = $request->input('buttom');

        $female->hip_round = $request->input('hip_round');
        $female->hip_length = $request->input('hip_length');
        $female->thigh_round = $request->input('thigh_round');

        $female->knee_round = $request->input('knee_round');
        $female->ankle_round = $request->input('ankle_round');
        $female->waist_knee_length = $request->input('waist_knee_length');
        $female->knee_feet_length = $request->input('knee_feet_length');

        $female->skirt = $request->input('skirt');
        $female->skirt_hip_round = $request->input('skirt_hip_round');
        $female->skirt_hip_length = $request->input('skirt_hip_length');

        $female->short_hip_round = $request->input('short_hip_round');
        $female->short_hip_length = $request->input('short_hip_length');
        $female->short_thigh_round = $request->input('short_thigh_round');
        $female->short_knee_round = $request->input('short_knee_round');
        $female->short_ankle_round = $request->input('short_ankle_round');
        $female->short_waist_knee_length = $request->input('short_waist_knee_length');
        $female->short_knee_feet_length = $request->input('short_knee_feet_length');

        // dd($female);

        $female->save();
        
        return response()->json( ['success' => 'data added successfully!'] );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Female  $female
     * @return \Illuminate\Http\Response
     */
    public function show(Female $female)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Female  $female
     * @return \Illuminate\Http\Response
     */
    public function edit(Female $female)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Female  $female
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Female $female)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Female  $female
     * @return \Illuminate\Http\Response
     */
    public function destroy(Female $female)
    {
        //
    }
}
