@extends('layout')

@section('content')

<style>
    .image {
        border-radius: 50%;
        height:200px;
        left: 18%;
        padding-top:15px;
    }

    #title{
        color:pink;
        font-family: "Times New Roman", Times, serif;
    }

    p.serif {
        font-family: "Times New Roman", Times, serif;
        color:white;
        font-size: large;
    }

    .box{

        opacity:0.4;
        width:20%;

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
    #dwn{
        transform: translate(0%, 55%);
    }


</style>
    <section class="section">
    <div class="container has-text-centered">
        <h2 class="title" id="title">The Team</h2>
        <p class="serif">we believe in simple and cost effective solutions. We constantly focus on innovation and disruption to create new opportunities for our users across the world.</p>

        <div class="columns is-centered" style="padding: 2rem">
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-2by1">
                            <img class="image" src="https://allps.ch/images/jakeer.jpeg" alt="Placeholder image" style="width:200px">
                        </figure>
                    </div>

                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Jakeer Mohammad</p>
                                <p class="subtitle is-6">Founder</p>
                            </div>
                        </div>

                        <div class="content">
                            IT experience of 17 years in Banking,Internet and Mobile domains.
                            <a>@ipropal</a>.
                            <!--<a href="#">#css</a>
                            <a href="#">#responsive</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-2by1">
                            <img class="image" src="https://allps.ch/images/markus.jpg" alt="Placeholder image" style="width:200px">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Markus Klinkner</p>
                                <p class="subtitle is-6">Advisor/Investor</p>
                            </div>
                        </div>

                        <div class="content">
                            Buisiness experience of 20 years in Banking Domain.
                            <a>@ipropal</a>.
                            <!--<a href="#">#css</a>
                            <a href="#">#responsive</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-2by1">
                            <img class="image" src="https://allps.ch/images/feroz.jpg" alt="Placeholder image" style="width:200px">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Feroz Mohammad</p>
                                <p class="subtitle is-6">COO</p>
                            </div>
                        </div>

                        <div class="content">
                            IT experience of 10 years in IOT based solutions.
                            <a>@ipropal</a>.
                            <!--<a href="#">#css</a>
                            <a href="#">#responsive</a>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-2by1">
                            <img class="image" src="https://allps.ch/images/javed.jpg" alt="Placeholder image" style="width:200px">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Javed Memon</p>
                                <p class="subtitle is-6">Advisor/Investor</p>
                            </div>
                        </div>

                        <div class="content">
                            IT outsourcing experience in Banking Domain.
                            <a>@ipropal</a>.
                            <!--<a href="#">#css</a>
                            <a href="#">#responsive</a>-->
                        </div>
                    </div>
                </div>
            </div>


        </div>
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
