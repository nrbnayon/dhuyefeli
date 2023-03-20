<?php

namespace App\Http\Controllers\Front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index() {

        $products = Product::get();

        return view('front.services', compact('products'));
    }
}
