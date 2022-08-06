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
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ForgetController;
use App\Http\Controllers\User\ResetController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ProductCartController;
use App\Http\Controllers\Admin\FavouriteController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });




////////////////// User Login Api   start ////////////////////////////

 // Login Route
Route::post('/login',[AuthController::class, 'Login']);

 // Register Route
Route::post('/register',[AuthController::class, 'Register']);

 // Forget Password Route
Route::post('/forgetpassword',[ForgetController::class, 'ForgetPassword']);

 // Reset Password Route
Route::post('/resetpassword',[ResetController::class, 'ResetPassword']);

 // Current User Route 
Route::get('/user',[UserController::class, 'User'])->middleware('auth:api');


////////////////// User Login Api   End ////////////////////////////



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


// Similar Product Route
Route::get('/similar/{subcategory}',[ProductListController::class, 'SimilarProduct']);

// Review Product Route
Route::get('/reviewlist/{id}',[ReviewController::class, 'ReviewList']);

// Product Cart Route
Route::post('/addtocart',[ProductCartController::class, 'AddToCart']);


//  Cart Count Route
Route::get('/cartcount/{product_code}',[ProductCartController::class, 'CartCount']);


//  Favourite Route
Route::get('/favourit/{product_code}/{email}',[FavouriteController::class, 'AddFavourit']);

//  Favourite Route
Route::get('/favouritelist/{email}',[FavouriteController::class, 'FavouriteList']);

//  Favourite Remove Route
Route::get('/favouriteremove/{product_code}/{email}',[FavouriteController::class, 'FavouriteRemove']);

//  Favourite Count Route
Route::get('/favouritecount/{product_code}',[FavouriteController::class, 'FavCount']);

//  Cart List Route
Route::get('/cartlist/{email}',[ProductCartController::class, 'CartList']);

// Remove Cart List Route
Route::get('/removecartlist/{id}',[ProductCartController::class, 'RemoveCartList']);

// price  Cart item Route
Route::get('/cartitemplus/{id}/{quantity}/{price}',[ProductCartController::class, 'CartItemPlus']);

Route::get('/cartitemminus/{id}/{quantity}/{price}',[ProductCartController::class, 'CartItemMinus']);


// Cart Order Route
Route::post('/cartorder',[ProductCartController::class, 'CartOrder']);
