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

    #dwn{
    transform: translate(0%, 55%);
    }
</style>

    <section class="section">
    <div class="container has-text-centered">
        <h2 class="title" style="color:pink;font-family:Times">Contact</h2>
        <p style="color:whitesmoke">Thank you for your interest in ALLPS. Please provide the following information about your business requirements.</p>
        <form style="padding-top: 30px" method="POST" action="/contact">
            @csrf
            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <label for="name" style="color: white;float:left">Name</label>
                        <p class="control has-icons-left">

                            <input class="input" name="name" type="text" placeholder="Name">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                        </p>
                    </div>
                    <div class="field">
                        <label for="email" style="color: white;float:left">Email</label>
                        <p class="control has-icons-left has-icons-right">

                            <input class="input" name="email" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <label for="subject" style="color: white">Subject</label>
                        <input class="input" name="subject" type="text" placeholder="Subject">
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <label for="message" style="color: white">Message</label>
                            <textarea class="textarea" name="message" placeholder="Message us"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <button class="button is-link" type="submit">
                                Send message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
