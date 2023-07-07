<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsPhotos extends Model
{
    use HasFactory;

    public function scopeBasicSelect(Builder $q): Builder {
        $q = $q->select(
            'id',
            'product_id',
            'title',
            'src',
            'alt',
            'created_at',
            'updated_at',
        );
        return $q;
    }
}
