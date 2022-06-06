<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function services(){
        return view('services');
    }

    public function teams(){
        return view('teams');
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }
}
