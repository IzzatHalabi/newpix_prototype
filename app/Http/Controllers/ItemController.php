<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use App\Services\ItemService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    protected $itemService;

    public function __construct(ItemService $itemService)
    {
        $this->middleware('auth');
        $this->itemService = $itemService;
    }

    public function index()
    {
        return view('home', [
            'items' => Item::all(),
            'categories' => Category::all()
        ]);
    }

    public function show($itemId)
    {
        $itemInCart = Auth::user()->hasItem($itemId);

        return view('product', [
            'item' => Item::findOrFail($itemId),
            'itemInCart' => $itemInCart,
            'quantity' => $itemInCart 
                            ? Auth::user()->items()->find($itemId)->pivot->quantity
                            : 0
        ]);
    }

    public function addToCart(Request $request)
    {
        $this->itemService->addToCart($request);

        return redirect()
                ->route('cart.index')
                ->with('success_message', 'Item was added to your cart.');
    }

    public function removeFromCart($itemId)
    {
        $this->itemService->removeFromCart($itemId);

        return back()
                ->with('success_message','Item has been removed.');
    }
}