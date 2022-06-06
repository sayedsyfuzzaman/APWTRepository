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
                    <th scope="col">Name Of VAS</th>
                    <th scope="col">Traffic</th>
                    <th scope="col">Source</th>
                    <th scope="col">Code</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                <tr>
                    <th scope="row">{{$service->sl}}</th>
                    <td>{{$service->name}}</td>
                    <td>{{$service->traffic}}</td>
                    <td>{{$service->source}}</td>
                    <td>{{$service->code}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
