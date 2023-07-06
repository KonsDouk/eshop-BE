<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    use HasFactory;

    public function index(Builder $q): Builder {
        $q = $q->select(
            'id',
            'customer_id',
            'items',
            'total_price',
            'payment_method',
            'state',
            'created_at',
            'update_at',
        );
        return $q;
    }
}
