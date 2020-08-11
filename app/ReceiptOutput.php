<?php

namespace App;

use App\Receipt;

class ReceiptOutput 
{
    public $details = [];

    public function __construct(Receipt $receipt = null)
    {
        if ($receipt) $this->newReceipt($receipt);
    }

    public function newReceipt($receipt)
    {
        $this->details = json_decode($receipt->details);
    }

    public function subject($property)
    {
        return $this->details->$property;
    }

    public function items()
    {
        return $this->details->items;
    }
}