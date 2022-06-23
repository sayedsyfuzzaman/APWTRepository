<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        return redirect(route('login'));
    }


    public function contact(){
        return view('contact');
    }

    public function contactSubmitted(Request $request){
        $validate = $request->validate([
            "name" => "required|min:5|max:25",
            "email" => "email",
            'subject' => 'required',
            'message' => 'required'
        ],
//            ['name.required'=>"Please put you name here"],

        );

        echo "Response Submitted";
    }
}
