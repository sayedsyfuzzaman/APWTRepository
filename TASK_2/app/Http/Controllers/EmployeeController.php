<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function registration()
    {
        return view("registration");
    }

    public function registrationSubmitted(Request $request)
    {

        $validate = $request->validate([
            "name" => "required|min:5|max:25",
            "email" => "email",
            'password' => 'required',
            'designation' => 'required',
            'address' => 'required'
        ],
//            ['name.required'=>"Please put you name here"],

        );


        $employee = new  Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->password = $request->password;
        $employee->designation = $request->designation;
        $employee->address = $request->address;
        $employee->save();

        return redirect()->route('login');
    }
}
