<?php

namespace App\Http\Controllers;

use App\Female;
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
    public function store(Request $request)
    {
        //
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
