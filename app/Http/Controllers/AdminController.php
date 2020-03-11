<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;


class AdminController extends Controller
{
    //
    public function index() {

        $customers = Customer::all();

        // dd($customers);

        return view( 'admin.table', [ 'customers' => $customers ] );
        
    }

    public function showDetails($id) {
        
        // $customer = Customer::findOrFail($id);

        // if( $customer->gender === 'male' ) {

        // } else if( $customer->gender === 'female' ) {

        // } else {
        //     return response()->json( [ 'Error' => 'Customer\'s gender should be male or female.' ] );       
        // }


    }

}
