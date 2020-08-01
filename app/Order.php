<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // public function setShippingAddressAttribute($value)
    // {
    // 	$this->attributes['shipping_address'] = json_encode($value, JSON_UNESCAPED_SLASHES);
    // }

    // public function getShippingAdressAttribute($value)
    // {
    // 	return json_decode($value);
    // }

    // public function setNotesAttribute($value)
    // {
    // 	$this->attributes['notes'] = json_encode($value);
    // }

    // public function getNotesAttribute($value)
    // {
    // 	return json_decode($value);
    // }

    // public function setBillingAddressAttribute($value)
    // {
    // 	$this->attributes['billing_address'] = json_encode($value);
    // }

    // public function getBillingAddressAttribute($value)
    // {
    // 	return json_decode($value);
    // }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_items', 'order_id', 'product_id')->withPivot('quantity', 'price');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
