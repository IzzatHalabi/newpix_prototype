<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductArora;
use App\ProductOrensport;
use App\ProductPanzer;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $productsArora = ProductArora::inRandomOrder()->take(5)->get();
        $productsOrensport = ProductOrensport::inRandomOrder()->take(5)->get();
        $productsPanzer = ProductPanzer::inRandomOrder()->take(5)->get();

        return view('home')->with(compact('productsArora','productsOrensport','productsPanzer'));
    }

        /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('product')->with(compact('product'));
        
    }
    
}
