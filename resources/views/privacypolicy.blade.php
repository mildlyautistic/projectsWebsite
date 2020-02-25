@extends('layout')

@section('content')

    <style>

        html {
            color: whitesmoke;
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

        .btm {
            opacity: 0.3;
        }

        .cont {


            font-family: Times;
            font-size: 20px;
            top: 50%;

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
                <h1 style="color:#7C0A02">Privacy Policy</h1>
                <h4 style="color:#0F4C81">General</h4>
                <p>ALLPS GmbH is responsible for the collection, processing and use of your data and has to ensure the
                    compatibility with Swiss law. The protection of your personal data is a priority at ALLPS GmbH. With
                    this policy we want to inform you about the data collected on allps.ch and how this collected data
                    is used.</p>
                <h4 style="color:#0F4C81">Data Security</h4>
                <p>We will keep your information securely, and therefore take all reasonable steps to protect your data
                    from loss, access, misuse or alteration. Our employees and contract partners, who have access to
                    your data, are contractually committed to secrecy and compliance with data protection regulations.
                    In some cases, we may be required to submit your inquiries to affiliates. Also in these cases your
                    data will be kept confidential at all times.</p>
                <h4 style="color:#0F4C81">Changes</h4>
                <p>Please note that this privacy policy may change from time to time. We therefore recommend that you
                    regularly review this privacy policy to make sure you are always familiar with the latest
                    version.</p>
            </div>
        </div>
    </section>
    <hr/>
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
