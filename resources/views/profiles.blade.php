
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Profile form</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <!-- Styles -->
    <style>
        html, body {
            padding: 45px;
            background-color: #fff;
            color: black;
            font-family: "Noto Sans", sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;


        }


        .full-height {
            height: 210vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 50px;
            color: purple;
        }


        .links > a {
            color: #ff3b31;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

<div id="app">
    <div class="title"><strong>Profiles</strong></div>

    <div class="container">
        <div class="row">
            <div class="content">
            <div class="col-md-5">
                <create-profile></create-profile>


            </div>
            <hr />
            <div class="col-md-7">
                <profiles></profiles>
            </div>
            </div>
        </div>
    </div>


    </div>


</div>

<script async src="{{mix('js/app.js')}}"></script>
<!--<script src="js/app.js"></script>-->
</body>
</html>