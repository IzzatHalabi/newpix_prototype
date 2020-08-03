<?php

namespace App\Services;

use App\User;
use App\Receipt;
use App\ReceiptFormatter;
use Illuminate\Support\Facades\Auth;

class PaymentService {

    public function makePayment()
    {
        $user = Auth::user();

        $formatter = new ReceiptFormatter($user);

        $receipt = Receipt::create([
            'user_id' => $user->id,
            'details' => json_encode($formatter->general())
        ]);

        $user->items()->detach();

        // TODO: email

        return $receipt;
    }
}