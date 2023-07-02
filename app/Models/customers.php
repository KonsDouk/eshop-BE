<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $connection = 'backend';
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    use HasFactory;

    public function scopeBasicSelect(Builder $q): Builder{
        $q = $q->select(
            'customer_id',
            'fName',
        );
        dd($q);
    }
}
