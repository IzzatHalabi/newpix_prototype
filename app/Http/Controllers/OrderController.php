<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use App\Cart;
use Illuminate\Http\Request;
// use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $items = $user->items;

        return view('checkout', [
            'user' => $user,
            'items' => $items,
            'totalPrice' => Cart::totalPrice(Auth::user(), $items)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $orderproduct = new OrderProduct;
        $data = $request->input();

        try {
            $order->name = $data['name'];
            $order->phonenumber = $data['phoneNumber'];
            $order->email = $data['email'];
            $order->address = $data['address'];
            $order->country = $data['country'];
            $order->state = $data['state'];
            $order->zip = $data['zip'];
            $order->cardtype = $data['cc_bank'];
            $order->nameoncard = $data['cc_name'];
            $order->creditcardnum = $data['cc_number'];
            $order->expiration = $data['cc_expiration'];
            $order->cardtype = $data['cc_cvv'];

            foreach (Cart::content() as $item) {
                OrderProduct::create([
                    'order_id'=> $order->id,
                    'product_id'=>$item->model->id,
                    'quantity'=>$item->qty,
                ]);
            }
            Cart::destroy();
            return redirect()->route('checkoutConfirmation.index')->with('success_message','Your payment has been successfully accepted. Thank you.');

        } catch (Exception $e) {
            return view ('checkoutConfirmation')->with('success_message',"Purchase Unsuccessful.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
