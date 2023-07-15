<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Orders;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers(Request $request){
        $customers = Customer::get();
        return $customers;
    }

    public function getSelectedCustomer($id){
        $customer = Customer::where('id', $id)->first();
        return $customer;
    }

    public function getUserOrders($id){
        $customer_orders = Customer::where('id', $id)->with()
    }
}
