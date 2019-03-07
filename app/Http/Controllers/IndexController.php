<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
	
    public function index(){
    	$allproducts = Product::inRandomOrder()->where('status',1)->get();
    	$allproducts = json_decode(json_encode($allproducts));
    	// echo "<pre>"; print_r($allproducts);die;


    	return view('index')->with(compact('allproducts','productDetails'));
    }
    public function Cart(){
    	return view('cart');
    }
    public function Checkout(){
    	return view('checkout');
    }
    public function Details(){
    	return view('product-details');
    }
    public function Shop(){
    	return view('shop');
    }
}

