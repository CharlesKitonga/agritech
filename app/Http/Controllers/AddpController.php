<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\Image;


class AddpController extends Controller
{

	public function index(){
        $products = Product::all();
        return view('Addp.create')->with('products', $products);
    }

    public function post(Request $request){
    	
          $data = $request->all();

          $file = Input::file('file');
          $imageName = Input::file('file');
          $imageName = $imageName->getClientOriginalName();
          $destination = 'images/';
          $file->move($destination, $imageName);

          $image = new Product;
          $image->name = $data['name'];
          $image->slug = $data['slug'];
          $image->description = $data['description'];
          $image->price = $data['price'];
          $image->image = $imageName;
          $image->save();  
      }

    }
 
   

