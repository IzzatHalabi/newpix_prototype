<?php

namespace App\Http\Controllers;

use App\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceiptController extends Controller
{
    public function index()
    {
        return view('receipts.index', [
            'receipts' => Auth::user()->receipts,
        ]);
    }

    public function show($receiptId)
    {
        return view('receipts.show', [
            'receipt' => Receipt::findOrFail($receiptId)
        ]);
    }
}