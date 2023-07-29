<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuthentication extends Model
{
    use HasFactory;

    public function userAuthentication(Builder $q){
        $q = Customer::select('email', 'password');
        return $q;
    }
}
