<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteInfo;

class SiteInfoController extends Controller
{
  


public function AllSiteInfo(){

    $result = SiteInfo::get();
    return $result;

} // End method




}
