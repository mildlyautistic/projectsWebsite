@extends('layout')

@section('content')

    <style>

        html{
            color:whitesmoke;
            font-family: "Times New Roman", Times, serif;
        }
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            /* height: 300px;*/ /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .btm{
            opacity: 0.3;
        }
        .notification {


            font-family: Times;
            font-size: 20px;
            top:50%;

            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;


        }

        #dwn{
            transform: translate(0%, 55%);
        }

    </style>
    <section class="section">

        <div class="container">
            <div class="notification">
                <div class="title">
                    <h2>{!! $articles->title !!}</h2>
                </div>
                <p>
                    <img src="{!! $articles->featured_image_url !!}"
                         alt=""
                         class="image image-full" />
                </p>
                {!! $articles->body !!}

                <p style="margin-top: 1em">
                    <a href="/show-articles"> {!! $articles->tags !!}</a>
                </p>

            </div>
        </div>

    </section>
    <hr />




@endsection
