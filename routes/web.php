<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductDetailsController;
use App\Http\Controllers\Admin\ProductListController;



/*

Route::get('/link', function () {
    Artisan::call('storage:link');
});

|
*/




Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

// Admin Logout Route
Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout');

Route::prefix('admin')->group(function(){
//  admin profile 
Route::get('/user/profile',[AdminController::class, 'UserProfile'])->name('user.profile');

//  admin profile store 
Route::post('/user/profile/store',[AdminController::class, 'UserProfileStore'])->name('user.profile.store');

// change password
Route::get('/change/password',[AdminController::class, 'ChangePassword'])->name('change.password');

// change password update 
Route::post('/change/password/update',[AdminController::class, 'ChangePasswordUpdate'])->name('change.password.update');

});



Route::prefix('Category')->group(function(){

//  Category
Route::get('/all',[CategoryController::class, 'GetAllCategory'])->name('all.category');

Route::get('/add',[CategoryController::class, 'AddCategory'])->name('add.category');

Route::post('/store',[CategoryController::class, 'StoreCategory'])->name('categoy.store');

Route::get('/edit/{id}',[CategoryController::class, 'EditCategory'])->name('category.edit');

Route::post('/update',[CategoryController::class, 'UpdateCategory'])->name('categoy.update');



Route::get('/delete/{id}',[CategoryController::class, 'CategoryDelete'])->name('category.delete');



});




Route::prefix('SubCategory')->group(function(){

//  Category

Route::get('/all',[CategoryController::class, 'GetAllSubCategory'])->name('all.subcategory');

Route::get('/add',[CategoryController::class, 'AddSubCategory'])->name('add.subcategory');

Route::post('/store',[CategoryController::class, 'StoreSubCategory'])->name('subcategory.store');

Route::get('/edit/{id}',[CategoryController::class, 'EditSubCategory'])->name('subcategory.edit');

Route::post('/update',[CategoryController::class, 'UpdateSubCategory'])->name('subcategory.update');

Route::get('/delete/{id}',[CategoryController::class, 'DeleteSubCategory'])->name('subcategory.delete');



});


//  Slider 
Route::prefix('AllSlider')->group(function(){

Route::get('/allslider',[SliderController::class, 'GetAllSlider'])->name('all.slider');

Route::get('/addslider',[SliderController::class, 'AddSlider'])->name('add.slider');

Route::Post('/sliderstore',[SliderController::class, 'SliderStore'])->name('slider.store');

Route::get('/edit/{id}',[SliderController::class, 'SliderEdit'])->name('slider.edit');

Route::post('/sliderupdate',[SliderController::class, 'SliderUpdate'])->name('slider.update');

Route::get('/delete/{id}',[SliderController::class, 'SliderDelete'])->name('slider.delete');


});




//  Products 

Route::prefix('product')->group(function(){

Route::get('/product',[ProductListController::class, 'GetAllProduct'])->name('all.product');

Route::get('/addslider',[SliderController::class, 'AddSlider'])->name('add.slider');

Route::Post('/sliderstore',[SliderController::class, 'SliderStore'])->name('slider.store');

Route::get('/edit/{id}',[SliderController::class, 'SliderEdit'])->name('slider.edit');

Route::post('/sliderupdate',[SliderController::class, 'SliderUpdate'])->name('slider.update');

Route::get('/delete/{id}',[SliderController::class, 'SliderDelete'])->name('slider.delete');


});
