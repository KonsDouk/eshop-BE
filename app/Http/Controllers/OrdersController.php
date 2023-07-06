<?php

namespace App\Http\Controllers;

use App\Models\OrdersModel;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(Request $request){
        $orders = OrdersModel::get();

        return $orders;
    }
}
