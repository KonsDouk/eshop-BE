<?php

namespace App\Http\Controllers;

// use App\Models\Customer;
use App\Models\User;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    public function customers(Request $request){
        $customers = User::get();
        return $customers;
    }

    public function getSelectedCustomer(/*$id*/){
        
        $user_id = Auth::user()->id;
        return User::where('id', $user_id)->with('userOrders')->first();
    }

    public function getCurrentUser(){
        return Auth::user();
    }
}
