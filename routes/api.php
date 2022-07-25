<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductDetailsController;
use App\Http\Controllers\Admin\NotificationController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });






//GET VISITOR
Route::get('/getvisitor',[VisitorController::class,'GetVisitorDetails']);
//CONTACT PAGE ROUTE 
Route::post('/postcontact',[ContactController::class,'PostContactDetails']);

//SITE PATGE ROUTE
Route::get('/allsiteinfo',[SiteInfoController::class,'AllSiteInfo']);


//all Category Route 
Route::get('/allcategory',[CategoryController::class,'AllCategory']);

// ProductList Route 
Route::get('/productlistbyremark/{remark}',[ProductListController::class,'ProductListByRemark']);

// ProductList Route 
Route::get('/productlistbycategory/{category}',[ProductListController::class,'ProductListByCategory']);

// ProductList Route 
Route::get('/productlistbysubcategory/{category}/{subcategory}',[ProductListController::class,'ProductListBySubCategory']);

// Slider Route 
Route::get('/allslider',[SliderController::class,'AllSlider']);



//product details route

Route::get('/productdetails/{id}',[ProductDetailsController::class, 'ProductDetails']);

//Notifiction route

Route::get('/notification',[NotificationController::class, 'NotificationHistory']);


//Seach route

Route::get('/search/{key}',[ProductListController::class, 'ProductBySearch']);