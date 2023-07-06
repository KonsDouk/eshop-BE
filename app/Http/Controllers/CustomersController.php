<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers(){
        $customers = customer::get();

        return $customers;
    }
}
