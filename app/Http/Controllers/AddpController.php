<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class AddpController extends Controller
{

	public function index(){
        $products = Product::all();
        return view('Addp.create')->with('products', $products);
    }

    public function post(Request $request){
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
            'price'=>$_POST['price'],'extension'=>$uploaded_file_ex,'path'=>$path]);

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

    }

    // to download
    public function download($pathToFile){
        return response()->download(storage_path('app/public/').$pathToFile);
    }

   
}
