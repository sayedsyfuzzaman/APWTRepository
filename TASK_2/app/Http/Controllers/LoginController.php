<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function dashboard(){
        $employees = Employee::all();
        return view('dashboard')->with("employees", $employees);
    }

    public function loginSubmitted(Request $request){
        $employee = Employee::whereRaw("BINARY email = '$request->email'")->whereRaw("BINARY password = '$request->password'")->first();

        if(!$employee){
            return view('login')->with('message', 'Email or Password is invalid');
        }
        return redirect()->route('dashboard');
    }
}
