<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class OrdersController extends Controller
{
    public function index(Request $request){
        $orders = Orders::get();

        return $orders;
    }

    public function userOrders(/*$id*/){
        dd(Auth::user());
        $user_id = Auth::user()->id;
        $user_order = Orders::where('user_id', $user_id)->first();
        return $user_order;
    }
}
