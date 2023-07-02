<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers(){
        $customers = customers::get();
    }
}
