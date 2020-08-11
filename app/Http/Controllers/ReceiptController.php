<?php

namespace App\Http\Controllers;

use App\Receipt;
use App\ReceiptOutput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceiptController extends Controller
{
    public function index()
    {
        return view('receipts.index', [
            'receipts' => Auth::user()->receipts()->orderBy('id', 'desc')->get(),
            'output'=> new ReceiptOutput()
        ]);
    }

    public function show($receiptId)
    {
        $receipt = Receipt::findOrFail($receiptId);

        return view('receipts.show', [
            'receipt' => $receipt,
            'output' => new ReceiptOutput($receipt)
        ]);
    }
}