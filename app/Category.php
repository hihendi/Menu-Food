<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    protected $hidden = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}