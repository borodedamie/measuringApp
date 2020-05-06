<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Male;
use App\Female;


class AdminController extends Controller
{
    //
    public function index() {

        $customers = User::all();

        return $customers;
        
    }

    public function adminIndex() {

        $users = User::all();

        // return $users->id;

        return view( 'admin.newTable', [ 'users' => $users ] );
    }

    public function showDetails() {

        return view( 'admin.measurements' );
    }

    public function show($id) {

        $user = DB::table('users')->where('id', $id)->first();
        // $users = User::all();

        // dd($user);
        return view('admin.view')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = User::findOrFail($id);

            return response()->json(['data' => $data]);
        }
    }
    
     /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::where('id', $id)->find($id);

        DB::table('users')
        ->where('id', $id)
        ->update([
            $user->name = $request->input('name'),
            $user->address = $request->input('address'),
            $user->gender = $request->input('gender'),
            $user->phone_number = $request->input('phone_number'),
        ]);

        $user->save();

        return 'User\'s profile updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);

        $data->delete();
    }

}
