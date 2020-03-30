@extends('layout')

@section('content')

    <style>

        html{
            color:whitesmoke;
            font-family: "Times New Roman", Times, serif;
        }

        .first {
            border: 1px solid;
            padding: 10px;
            box-shadow: 10px 10px 5px #aaaaaa;
        }
        .first:hover{
            background-color: #333;
            color: white;
            box-shadow: 10px 10px 5px #3c3c3c;
        }

        h4 {
            text-transform: uppercase;
        }

        .first:hover p {
            color: #48ad26;
        }


    </style>
    <section class="section">

        <div class="container">
            <div class="notification">
                <h1 style="text-align: center"><b>Projects</b></h1>
                <ul class="style1">
                    @foreach ($projects as $project)
                        <li class="first">
                            <h4><a href="/show-projects/{{ $project->id }}">{{ $project->name }}</a></h4>
                            <p>{{ $project->associated_with }}</p>
                        </li>
                        <br>
                    @endforeach
                </ul>


            </div>
        </div>
    </section>
    <hr />




@endsection
