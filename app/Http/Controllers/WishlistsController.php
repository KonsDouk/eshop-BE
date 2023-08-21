<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserWishlists;
use App\Models\Products;

class WishlistsController extends Controller
{
    public function getUserWishlists(){
        $user_id = Auth::user()->id;
        // $wishlist_products = [];
        $wishlist_with_products = [];

        $wishlists = UserWishlists::where('user_id', $user_id)->get();
        //thelo na einai tis morfis wishlist :{id, user_id...., data: {productsPerWishlist}}
        foreach ($wishlists as &$value){
            $wishlist_products = [];
            $items = explode('|', $value->items);
            foreach($items as &$products){
                array_push($wishlist_products, Products::where('id', $products));
            }
            $wishlists['data'] = $wishlist_products;
        }
        return $wishlists;
    }
}
