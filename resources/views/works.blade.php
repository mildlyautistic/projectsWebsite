@extends('layout')

@section('content')
    <style>
        body {
            background-color: white;
            color: white;
        }
    </style>

    <body>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Project_id</th>
            <th scope="col">User_id</th>
            <th scope="col">Name</th>
            <th scope="col">S_month</th>
            <th scope="col">S_year</th>
            <th scope="col">E_month</th>
            <th scope="col">E_year</th>
            <th scope="col">Associated_with</th>
            <th scope="col">Description</th>
            <th scope="col">Proj_url</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{$project -> id}}</td>
            <td>{{$project -> user_id}}</td>
            <td>{{$project -> name}}</td>
            <td>{{$project -> s_month}}</td>
            <td>{{$project -> s_year}}</td>
            <td>{{$project -> e_month}}</td>
            <td>{{$project -> e_year}}</td>
            <td>{{$project -> associated_with}}</td>
            <td>{{$project -> description}}</td>
            <td>{{$project -> proj_url}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
