<?php

namespace App\Services;

use App\Item;
use Illuminate\Support\Facades\Auth;

class ItemService {

    public function addToCart($user, $request)
    {
        if ($user->hasItem($request->itemId)) {
            
            $user->items()->updateExistingPivot(
                $request->itemId, 
                ['quantity' => $request->quantity]
            );

        } else {
            $user->items()->save(
                Item::findOrFail($request->itemId), 
                ['quantity' => $request->quantity]
            );
        }
    }

    public function removeFromCart($user, $request)
    {
        $user->items()->detach($request->itemId);
    }
}