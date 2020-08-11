<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 
        'item_id',
        'quantity',
    ];

    public static function totalPrice(User $user, $items = [])
    {
        if (empty($items)) $items = $user->items;

        $totalPrice = 0;
        foreach ($user->items as $item) {
            $totalPrice += $item->price * $item->pivot->quantity;
        }

        return $totalPrice;
    }
}
