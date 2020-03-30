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

        .btm{
            opacity: 0.3;
        }

        .avatar {
            /*vertical-align: middle;
            width: 50px;
            height: 50px;*/
            margin-left: auto;
            margin-right: auto;
            display: block;
            width: 50%;
            height: 140px;
            width: 140px;
        }

        #tab {
            /*position:absolute;
            left:150px;*/
            padding-left: 50px;
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

                <img src="https://cdn1.iconfinder.com/data/icons/user-pictures/100/unknown-512.png" alt="user" class="avatar">

                <h2>
                    <strong>User ID:</strong>{{ $profiles->user_id }}
                </h2>

                <h2>
                <strong>Name:</strong>  {{ $profiles->name }}
                </h2>
                <h2>
                    <strong>User Name:</strong> {{ $profiles->username }}
                </h2>
                <h2>
                    <strong>Email:</strong>{{ $profiles->email }}
                </h2>
                <h2>
                    <strong>About Me:</strong> {{ $profiles->about_me }}
                </h2>
                <h2>
                    <strong>Likes:</strong>{{ $profiles->likes }}
                </h2>
                <h2>
                    <strong>Dislikes:</strong> {{ $profiles->dislikes }}
                </h2>
                <h2>
                    <strong>URL:</strong> {{ $profiles->url }}
                </h2>
                <h2>
                    <strong>LinkedIn URL:</strong> {{ $profiles->l_url }}
                </h2>
                <h2>
                    <strong>Github URL:</strong> {{ $profiles->g_url }}
                </h2>


            </div>
        </div>
    </section>
    <hr />




@endsection
