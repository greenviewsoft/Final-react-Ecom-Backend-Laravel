<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favourites;
use App\Models\ProductList;
class FavouriteController extends Controller
{
    public function AddFavourit(Request $request){

$product_code = $request->product_code;
 $email = $request->email;
 $productDetails = ProductList::where('product_code',$product_code)->get();

$result = Favourites::insert([

    'product_name' =>$productDetails[0]['title'],
    'image' => $productDetails[0]['image'],
    'product_code' => $product_code,
    'email' => $email,
    
]);
  return $result;
    }// end method 



 public function FavouriteList(Request $request){

        $email = $request->email;
        $result = Favourites::where('email',$email)->get();
        return $result;

    }// End Mehtod 



      public function FavouriteRemove(Request $request){
        $product_code = $request->product_code;
        $email = $request->email;

        $result = Favourites::where('product_code',$product_code)->where('email',$email )->delete();
        return $result;

    }// End Mehtod 



    public function FavCount(Request $request){
        $product_code = $request->product_code;
        $result = Favourites::count();
        return $result;
    } // End Method 


}
