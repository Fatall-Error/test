<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Input;
use DB;

class PageController extends Controller
{
    public static function index(){

        $products = Product::latest('created_at')->limit(10)->get();

        return view('catalog')->with(compact('products'));

    }
    public static function product($slug){

        $product = Product::where('slug', '=', $slug)->firstOrFail();

        return view('inner_product')->with(compact('product'));

    }
}
