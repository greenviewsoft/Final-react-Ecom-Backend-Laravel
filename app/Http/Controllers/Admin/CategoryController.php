<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class CategoryController extends Controller
{
    public function AllCategory(){

$category = Category::all();

$categoryDetailsArray = [];

        foreach ($category as $value) {
            $subcategory = Subcategory::where('category_name',$value['category_name'])->get();

            $item = [
                'category_name' => $value['category_name'],
                'category_image' => $value['category_image'],
                'subcategory_name' => $subcategory
            ];

            array_push($categoryDetailsArray, $item);

        } 
        return $categoryDetailsArray;

    } // End Mehtod 


}
