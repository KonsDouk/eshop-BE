<?php

namespace App\Http\Controllers;

use App\Models\ProductsPhotos;
use Illuminate\Http\Request;

class ProductsPhotosController extends Controller
{
    public function index(Request $request) {
        $product_photos = ProductsPhotos::get();

        return $product_photos;
    }
}
