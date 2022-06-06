<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services(){
        $service = array();

         for($i=0; $i<5; $i++){
             $service = array(
                 "sl" => ($i+1),
                 "name" =>"pushpullbd.site/Wap",
                 "traffic" => "BDT 2 TK",
                 "source" => "BDT 2 TK",
                 "code" => "16800",
             );
             $services[] = (object)$service;
         }

         return view('services')->with('services', $services);
    }
}
