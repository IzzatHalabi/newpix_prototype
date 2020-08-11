<?php

namespace App\Services;

use App\Item;
use Illuminate\Support\Facades\Auth;

class ItemService {

    public function addToCart($request)
    {
        if (! $request->quantity) return $this->removeFromCart($request->itemId);

        $user = Auth::user();

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

    public function removeFromCart($itemId)
    {
        Auth::user()->items()->detach($itemId);
    }
}