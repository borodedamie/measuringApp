<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = Auth::user();

        $gender = $user->gender;

        if( $gender === 'Male') {

            return view('forms.male');

        } else if ( $gender === 'Female') {

            return view('forms.female');
        }

    }

    public function loadEdit()
    {
        return view('edit');
    }

    protected function authenticated(Request $request, $user)
    {
    return response([
        //
    ]);
    }
}
