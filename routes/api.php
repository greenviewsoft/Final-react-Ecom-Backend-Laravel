<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//GET VISITOR
Route::get('/getvisitor',[VisitorController::class,'GetVisitorDetails']);
//CONTACT PAGE ROUTE 

Route::post('/postcontact',[ContactController::class,'PostContactDetails']);

//SITE PATGE ROUTE

Route::get('/allsiteinfo',[SiteInfoController::class,'AllSiteInfo']);