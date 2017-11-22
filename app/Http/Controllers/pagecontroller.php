<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function about()
    {
    	return view ('about.about');


    }




    public function category()
    {
    	return view ('categories.category');


    }





     //
    public function contact()
    {
    	return view ('contact.contact');


    }



    public function deal()
    {
    	return view ('deal.deal');


    }



    public function post()
    {
    	return view ('posts.post');


    }



     public function product()
    {

     return view ('products.product');	
    }



    public function profile()
    {
    	return view ('profiles.profile');


    }


      public function flower()
    {
        return view ('flower.flower');


    }


      public function beverage()

    {
        return view ('beverage.beverage');


    }

      public function coffee()
    {
        return view ('coffee.coffee');


    }


      public function fruit()
    {
        return view ('fruit.fruit');


    }


    
}
