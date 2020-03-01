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

}
