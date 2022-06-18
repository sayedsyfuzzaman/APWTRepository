@extends('layouts.app')

@section('title')
    <title>Services</title>
@endsection

@section('content')
    <div class="bg-light py-5">
        <div class="container">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                <tr>
                    <th scope="row">{{$employee->id}}</th>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->password}}</td>
                    <td>{{$employee->designation}}</td>
                    <td>{{$employee->address}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
