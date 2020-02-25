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
    .cont {


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
    <div class="cont">
    <div class="content has-text-centered">
    <h1 style="color:#7C0A02">Impressum</h1>
<h4 style="color:#0F4C81">Name & Address</h4>
    <p>ALLPS GmbH <br>
        c/o Findea AG<br>
        Wiesenstrasse 8<br>
        8008 zurich</p>
<h4 style="color:#0F4C81">Email</h4>
<p>support@ipropal.com</p>
<h4 style="color:#0F4C81">Phone</h4>
<p>+41 (0) 766812378</p>
    </div>
    </div>
</section>
<hr />
<footer class="footer">
    <div class="row">
        <div class="column">
            <div class="content has-text-centered">
                <h2 style="color:white">Network Partner</h2>
            </div>
            <div class="row">
                <div class="column">
                    <div class="content has-text-centered">

                        <a href="https://www.swissnexindia.org/" target="_blank">
                            <img src="Images\swissnex.jpg" alt="swissnex" width="300" height="300">
                        </a>
                    </div>
                </div>

                <div class="column">
                    <div class="content has-text-centered">
                        <a href="https://startsummit.ch/" target="_blank">
                            <img src="Images\summit.jpeg" alt="summit" width="300" height="300">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="content has-text-centered">
                <h2 style="color:white">Platform Partner</h2>
            </div>
            <div class="content has-text-centered" id="dwn">
                <a href="https://www.hackerearth.com/" target="_blank">
                    <img src="Images\he.png" alt="hackerearth" width="300" height="300">
                </a>
            </div>
        </div>
    </div>
    <div class="btm">
        <hr />

        <a style="color: white;padding-left:40px" href="/impressum">Impressum</a>
        <a style="color: white;padding-left:80px" href="/privacypolicy">PrivacyPolicy</a>
    </div>


</footer>




@endsection
