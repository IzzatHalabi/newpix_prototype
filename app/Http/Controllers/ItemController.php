<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    protected $itemService;

    public function __construct(ItemService $itemService)
    {
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

        return view('items.show', [
            'item' => Item::findOrFail($itemId),
            'itemInCart' => $itemInCart,
            'quantity' => $itemInCart 
                            ? Auth::user()->items()->find($itemId)->pivot->quantity
                            : 0
        ]);
    }

    public function addToCart(Request $request)
    {
        try {
            $item = Item::findOrFail($request->itemId);

            $this->itemService->addToCart(Auth::user(), $request);

            return response()->json([
                'message' => 'Item '. $item->name .' is added to your cart.'
            ]);

        } catch (Exception $exception) {
            return response()->json([
                'errors' => $exception->getMessage()
            ], 500);
        }
    }

    public function removeFromCart(Request $request)
    {
        try {
            $item = Item::findOrFail($request->itemId);

            $this->itemService->removeFromCart(Auth::user(), $request);

            return response()->json([
                'message' => 'Item '. $item->name .' has been removed from your cart.'
            ]);

        } catch (Exception $exception) {
            return response()->json([
                'errors' => $exception->getMessage()
            ], 500);
        }
    }
}