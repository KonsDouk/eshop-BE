<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers(Request $request){
        $customers = Customer::get();

        return $customers;
    }
}
