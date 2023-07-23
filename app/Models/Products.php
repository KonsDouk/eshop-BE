<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    public function scopeBasicSelect(Builder $q): Builder {
        $q = $q->select(
            'id',
            'sku',
            'name',
            'description',
            'price',
            'quantity',
            'created_at',
            'updated_at',

        );
        return $q;
    }

    public function productPhotos(){
        return $this->hasMany(ProductsPhotos::class, 'product_id');
    }
}
