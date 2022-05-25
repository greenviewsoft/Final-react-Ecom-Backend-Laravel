<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;
class VisitorController extends Controller




{
   public function GetVisitorDetails() {

   // $method1 = request()->ip();
   // $method2 = request()->getClientIp();


    $ip_addrese = request()->getClientIp();
    date_default_timezone_set('Asia/Dhaka');
    $visit_time = date('h:i:sa');
    $visit_date = date('d-m-y');

$result = Visitor::firstOrCreate([

    'ip_address' => $ip_addrese,
    'visit_time' => $visit_time,
    'visit_date' => $visit_date
]);

return $result;

   }


  }