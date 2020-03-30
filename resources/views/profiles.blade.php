@extends('layout')

@section('content')

    <style>

        html{
            color:whitesmoke;
            font-family: "Times New Roman", Times, serif;
        }

        .first {
            border: 1px solid;
            padding: 30px 0;
            box-shadow: 10px 10px 5px #aaaaaa;
            height: 300px;
            text-align: center;
            width: 300px;
        }

        h4 {
            text-transform: uppercase;
            padding-top: 15px;
        }



        .card {

            font-family: Times;
            font-size: 20px;
            top:50%;
            display: flex;
            flex-wrap: wrap;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;

        }

        .column {
            float: left;
            padding: 35px;
            width: 50%;
            /* height: 300px;*/ /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .avatar {
            /*vertical-align: middle;
            width: 50px;
            height: 50px;*/

            width: 100px;
            height: 100px;

        }

    </style>
    <section class="section">

        <div class="container">
            <div class="card">

                <h1 style="text-align: center; padding-top: 10px"><b>Profiles</b></h1>
                <div class="row">

                    @foreach ($profiles as $profile)
                        <div class="column">
                        <div class="first">
                            <img src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/unknown-512.png" alt="user" class="avatar">
                            <h4><a href="/show-profiles/{{ $profile->id }}">{{ $profile->name }}</a></h4>
                            <p style=" color: #48ad26">{{ $profile->username }}</p>
                            <p style="color: grey">{{ $profile->email }}</p>
                        </div>
                        </div>
                        <br>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <hr />




@endsection
