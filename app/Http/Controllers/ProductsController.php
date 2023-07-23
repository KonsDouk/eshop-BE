<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request){
        $product =  Products::with('productPhotos')->get();

        return $product;
    }

    public function getProduct($id){
        $product = Products::with('productPhotos')->where('id', $id)->first();
        return $product;
    }
}
