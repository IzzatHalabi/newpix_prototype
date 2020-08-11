<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function create()
    {
        $user = Auth::user();
        $items = $user->items;

        return view('checkout', [
            'user' => Auth::user(),
            'items' => $items,
            'totalPrice' => Cart::totalPrice(Auth::user(), $items)
        ]);
    }

    public function store(Request $request)
    {
        return redirect()
                ->route('receipts.show', [
                    'receiptId' => $this->paymentService->makePayment($request)->id
                ]);
    }
}