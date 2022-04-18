<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function register(Request $request){
   return view(product.register);
}


    

    public function store(Request $request){
$product = new product();
$product->name =$request->name;
$product->unit =$request->unit;
$product->price =$request->price;
$product->quantity =$request->quantity;
$is_successed =$product::save();
if($is_successed)
echo'record saved succssesfuly';
else
echo 'something went wrong';
    }
}
