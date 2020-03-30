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

    h4 {
    text-transform: uppercase;
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

</style>
<section class="section">

    <div class="container">
        <div class="notification">
        <h1 style="text-align: center"><b>Articles</b></h1>
<ul class="style1">
    @foreach ($articles as $article)
    <li class="first">
    <h4><a href="/show-articles/{{ $article->id }}">{{ $article->title }}</a></h4>
    <p style=" color: grey">{{ $article->excerpt }}</p>
    </li>
    <br>
    @endforeach
</ul>


    </div>
    </div>
</section>
<hr />




@endsection
