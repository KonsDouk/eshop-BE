<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Customer extends Model
{
    // protected $connection = 'backend';
    // protected $table = 'customers';
    // protected $primaryKey = 'customer_id';

    use HasFactory;

    public function scopeBasicSelect(Builder $q): Builder{
        $q = $q->select(
            'id',
            'fName',
            'lName',
            'phone',
            'cellphone',
            'address',
            'streetNo',
            'isActive',
            'created_at',
            'updated_at',
        );
        return $q;
    }
}

    