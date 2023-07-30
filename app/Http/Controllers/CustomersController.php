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

    public function getSelectedCustomer($id){
        return User::where('id', $id)->with('userOrders')->first();
    }

    public function login(Request $request){

        $validated = $request->validate([
            'email'=> ['required', 'email'],
            'password'=> ['required']
        ]);
        
        if (Auth::attempt($validated)){
            $request->session()->regenerate();

            dd('Authenticateddddd');
        }
    }
}
