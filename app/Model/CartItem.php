<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    /**
     * Get the cart for this cart item.
     */
    public function cart()
    {
        return $this->belongsTo('App\Model\Cart');
    }

    /**
     * Get the inventory variant for this cart item.
     */
    public function inventoryVariant()
    {
        return $this->belongsTo('App\Model\InventoryVariant');
    }

}
