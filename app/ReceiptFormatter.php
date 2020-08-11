<?php

namespace App;

class ReceiptFormatter 
{    
    protected $format;

    public function __construct($data)
    {
        $this->format = [
            'receipt_code' => $this->latestCode(),
            'buyer_name' => $data->name,
            'email' => $data->email,
            'phone' => $data->phone,
            'address' => $data->address,
            'total_price' => 0,
            'items' => []
        ];
    }

    public function general($items)
    {
        foreach ($items as $item) $this->track($item);

        return $this->format;
    }

    public function track($item)
    {
        $subPrice = number_format($item->price * $item->pivot->quantity, 2);

        array_push($this->format['items'], [
            'name' => $item->name,
            'category' => $item->category->name,
            'price' => number_format($item->price, 2),
            'quantity' => $item->pivot->quantity,
            'sub_price' => $subPrice
        ]);

        $this->format['total_price'] += $subPrice;
    }

    public function latestCode()
    {
        $latestId = Receipt::all()->isNotEmpty() 
                        ? Receipt::latest()->first()->id + 1
                        : 1;

        return sprintf("R-%05d", $latestId);
    }
}