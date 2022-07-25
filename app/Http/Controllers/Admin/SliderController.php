<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
class SliderController extends Controller
{
   public function AllSlider(){

$AllSlider = HomeSlider::all();

return $AllSlider;



   }// end method
}
