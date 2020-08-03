<?php

namespace App;

use App\User;

class ReceiptFormatter {
    
    protected $user;
    protected $format;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->format = [
            'userName' => $this->user->name,
            'email' => $this->user->email,
            'phone' => $this->user->phone,
            'address' => $this->user->address,
            'totalPrice' => 0,
            'items' => []
        ];
    }

    public function general()
    {
        foreach ($this->user->items as $item) $this->track($item);

        return $this->format;
    }

    public function track($item)
    {
        $subPrice = $item->price * $item->pivot->quantity;

        array_push($this->format['items'], [
            'name' => $item->name,
            'category' => $item->category->name,
            'price' => $item->price,
            'quantity' => $item->pivot->quantity,
            'subPrice' => $subPrice
        ]);

        $this->format['totalPrice'] += $subPrice;
    }
}