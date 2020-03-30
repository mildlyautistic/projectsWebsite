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
            <th scope="col">Article_id</th>
            <th scope="col">User_id</th>
            <th scope="col">Title</th>
            <th scope="col">Excerpt</th>
            <th scope="col">Featured_image_url</th>
            <th scope="col">Body</th>
            <th scope="col">Tags</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{$article -> id}}</td>
            <td>{{$article -> user_id}}</td>
            <td>{{$article -> title}}</td>
            <td>{{$article -> excerpt}}</td>
            <td>{{$article -> featured_image_url}}</td>
            <td>{{$article -> body}}</td>
            <td>{{$article -> tags}}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
    </body>
@endsection
