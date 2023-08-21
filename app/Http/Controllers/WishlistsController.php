<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserWishlists;

class WishlistsController extends Controller
{
    public function getUserWishlists(){
        $user_id = Auth::user()->id;

        return UserWishlists::where('user_id', $user_id)->get();
    }
}
