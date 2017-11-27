<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('shop')->with('products', $products);
    }
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $products = Product::where('slug', $slug)->firstOrFail();       
        $interested = Product::where('slug', '!=', $slug)->get()->random(4);
        return view('products.product')->with(['product' => $products, 'interested' => $interested]);
    }
}