<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'items' => Item::all(),
            'categories' => Category::all()
        ]);
    }

    public function faq() {
        return view('faq');
    }
}
