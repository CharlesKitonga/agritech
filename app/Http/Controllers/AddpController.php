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
<<<<<<< HEAD
    	//dd($_POST);die;
        $path = null;
        $name = null;
        $slug = null;
        $description = null;
        $price = null;
        $uploaded_file_ex = null;  
        // check if the request has a file
        if($request->hasFile('file')){
            $uploaded_file = $request->file('file');

            // this get the original extention
            $uploaded_file_ex = $uploaded_file->getClientOriginalExtension();


            // the path to store the file
            // I add the time at the begining to avoid overwritting the file if another file has the same name.
            $filename = time().'.'.$uploaded_file_ex;
            $path = $uploaded_file->storeAs('public', $filename);
        }
        return Product::create([
            'name'=>$_POST['name'], 'slug'=>$_POST['slug'], 'description'=>$_POST['description'],
            'price'=>$_POST['price'],'path'=>$path]);

        // // Now to store in the database
        // $file = new Files();
        // $file->name = $name;
        // $file->slug = $slug;
        // $file->description = $description;
        // $file->price = $price;
        // $file->extension = $uploaded_file_ex;
        // $file->path = $path;
        // $file->save();

        // return back();
=======
    	
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
>>>>>>> master

    }
 
   

