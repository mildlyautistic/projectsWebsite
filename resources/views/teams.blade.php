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
            <th scope="col">Profile_id</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Image</th>
            <th scope="col">UserId</th>
            <th scope="col">Email</th>
            <th scope="col">About me</th>
            <th scope="col">Likes</th>
            <th scope="col">Dislikes</th>
            <th scope="col">URL</th>
            <th scope="col">Linkedin URL</th>
            <th scope="col">Github URL</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profiles as $profile)
        <tr>
            <td>{{$profile -> id}}</td>
            <td>{{$profile -> name}}</td>
            <td>{{$profile -> username}}</td>
            <td>{{$profile -> image_url}}</td>
            <td>{{$profile -> user_id}}</td>
            <td>{{$profile -> email}}</td>
            <td>{{$profile -> about_me}}</td>
            <td>{{$profile -> likes}}</td>
            <td>{{$profile -> dislikes}}</td>
            <td>{{$profile -> url}}</td>
            <td>{{$profile -> l_url}}</td>
            <td>{{$profile -> g_url}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endsection
