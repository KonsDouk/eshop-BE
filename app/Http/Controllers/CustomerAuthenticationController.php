<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class CustomerAuthenticationController extends Controller
{
    public function authenticateCustomer(Request $request){
        $credentials = $request->validate([
            'email'=> ['required', 'email:rfc'],
            'password'=> ['required']
        ]);
        
        if (Auth::attempt($credentials)){
            $request->session()->regenrate();
            return 'user authenticated';
        }
    }
}
