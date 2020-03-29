<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Male;
use App\Female;


class AdminController extends Controller
{
    //
    public function index() {

        $customers = Customer::all();

        // dd($customers);

        return view( 'admin.table', [ 'customers' => $customers ] );
        
    }

    public function showDetails($id) {

        $customerInfo = Customer::findOrFail($id);
        $gender = $customerInfo->gender;

        

        return $gender;
    }

}
