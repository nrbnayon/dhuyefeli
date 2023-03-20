<?php

namespace App\Http\Controllers\Front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {

        $products = Product::get();

        return view('front.index', compact('products'));
    }
}
