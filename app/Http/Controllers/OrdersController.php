<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(Request $request){
        $orders = Orders::get();

        return $orders;
    }

    public function userOrder($id){
        $user_order = Orders::where('customer_id', $id)->first();
        return $user_order;
    }
}
