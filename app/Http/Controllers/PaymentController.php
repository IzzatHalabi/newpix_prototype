<?php

namespace App\Http\Controllers;

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
        return view('payments.create', [
            'item' => Auth::user()->items,
            'user' => Auth::user()
        ]);
    }

    public function store()
    {
        return redirect()
                ->route('receipts.show', [
                    'receiptId' => $this->paymentService->makePayment()->id
                ]);
    }
}