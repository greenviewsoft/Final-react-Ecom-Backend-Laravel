<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductList;
use App\Models\ProductDetails;

class ProductDetailsController extends Controller
{
    


public function ProductDetails(Request $request){

    $id = $request->id;

    $ProductDetails = ProductDetails::where('product_id',$id)->get();
    $productList = ProductList::where('id',$id)->get();

    $item = [
                'ProductDetails' => $ProductDetails,
                'productList' => $productList,
            ];

    return $item;

} // end method


}
