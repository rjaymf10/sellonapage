<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
}
