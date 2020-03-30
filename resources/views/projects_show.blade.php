@extends('layout')

@section('content')

    <style>

        html{
            color:whitesmoke;
            font-family: "Times New Roman", Times, serif;
        }


        h4 {
            text-transform: uppercase;
        }

        h2{
            padding-top: 25px;
            text-align: center;

        }

        .container{
            background-color: #1b1e21;
        }
        .notification{
            background-color: #cbcbcb;
            font-family: "Noto Sans", sans-serif;
        }

    </style>
    <section class="section">

        <div class="container" >
            <div class="notification">



                <h2>
                    <strong>User ID:</strong>{{ $projects->user_id }}
                </h2>

                <h2>
                    <strong>Name:</strong>  {{ $projects->name }}
                </h2>
                <h2>
                    <strong>Start Month:</strong> {{ $projects->s_month }}
                &nbsp
                    <strong>Start Year:</strong>{{ $projects->s_year }}
                </h2>
                <h2>
                    <strong>End month:</strong> {{ $projects->e_month }}
                &nbsp
                    <strong>End year:</strong>{{ $projects->e_year }}
                </h2>
                <h2>
                    <strong>Associated with:</strong> {{ $projects->associated_with }}
                </h2>
                <h2>
                    <strong>Description:</strong> {{ $projects->description }}
                </h2>
                <h2>
                    <strong>Project URL:</strong> {{ $projects->proj_url }}
                </h2>


            </div>
        </div>
    </section>
    <hr />




@endsection
