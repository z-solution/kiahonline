<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * Get the user for this cart.
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    /**
     * Get the shop for this cart.
     */
    public function shop()
    {
        return $this->belongsTo('App\Model\Shop');
    }

    /**
     * Get the cart items for the cart.
     */
    public function cartItems()
    {
        return $this->hasMany('App\Model\CartItem');
    }
}
