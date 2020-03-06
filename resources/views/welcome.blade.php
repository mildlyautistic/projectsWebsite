@extends('layout')

@section('content')

<!--<section class="hero" >
    <figure class="image">
        <img src="https://images.pexels.com/photos/167636/pexels-photo-167636.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
    </figure>
</section>-->

<style>
    * {
        box-sizing: border-box;
    }


    #myVideo {
        position:relative;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }

    .cont {
        position: absolute;
        margin: 0;
        font-family: Times;
        font-size: 20px;
        top:50%;


        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        padding: 20px;
    }
ul{
    font-size:20px;
    font-family: Times;
}
li{

}
    #myBtn {
        width: 200px;
        font-size: 18px;
        padding: 10px;
        border: none;
        background: #000;
        color: #fff;
        cursor: pointer;
    }

    #myBtn:hover {
        background: #ddd;
        color: black;
    }

    .column {
        float: left;
        width: 50%;
        padding: 10px;
       /* height: 300px;*/ /* Should be removed. Only for demonstration */
    }

    #onee {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height:400px;
        width:220px;
        transform: translate(-60%, 5%);

        /* height: 300px;*/ /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height:350px;
        width:200px;
        transform: translate(-20%, -5%);
    }


    html {
        scroll-behavior: smooth;
    }
    #hdng{
        color:#87CEEB;
        font-family: "Noto Sans CJK HK", sans-serif;
    }
    .mission{
        background-color: rgba(0,0,0,0);
        opacity:0.6;
        background-position-x: 0%;
        background-position-y: 0%;
        background-repeat: repeat;
        background-attachment: scroll;
        background-size: auto;
        background-origin: padding-box;
        background-clip: border-box;
    }

    h4.one::before {

        display:inline-block;
        height:32px;
        width:32px;
        margin-right: 5px;
        content: "";
        background:url(https://ipropal.com/images/svg/smartmatchedfreelancers.svg) no-repeat 0 0;
        background-size: 30px 30px;
        transform: translate(0%, 30%);

    }
    h4.two::before {

        display:inline-block;
        height:35px;
        width:32px;
        margin-right: 5px;
        content: "";
        background:url(https://ipropal.com/images/svg/team.svg) no-repeat 0 0;
        background-size: 30px 30px;
        transform: translate(0%, 30%);
    }
    h4.three::before {
        display:inline-block;
        height:35px;
        width:32px;
        margin-right: 5px;
        content: "";
        background:url(https://ipropal.com/images/svg/pricetag.svg) no-repeat 0 0;
        background-size: 30px 30px;
        transform: translate(0%, 30%);
    }
    h4.four::before {
        display:inline-block;
        height:35px;
        width:32px;
        margin-right: 5px;
        content: "";
        background:url(https://ipropal.com/images/svg/check.svg) no-repeat 0 0;
        background-size: 30px 30px;
        transform: translate(0%, 30%);
    }
    h4.five::before {
        display:inline-block;
        height:35px;
        width:32px;
        margin-right: 5px;
        content: "";
        background:url(https://ipropal.com/images/svg/star.svg) no-repeat 0 0;
        background-size: 30px 30px;
        transform: translate(0%, 30%);
    }
    h4.six::before {
        display:inline-block;
        height:35px;
        width:32px;
        margin-right: 5px;
        content: "";
        background:url(https://ipropal.com/images/svg/percent.svg) no-repeat 0 0;
        background-size: 30px 30px;
        transform: translate(0%, 30%);
    }

    #One::before {
        display:inline-block;
        height:105px;
        width:102px;
        margin-right: 5px;
        content: "";
        background:url(https://ipropal.com/images/user.png) no-repeat 0 0;
        background-size: 80px 80px;
        transform: translate(-100%, 120%);
    }
    #Two::before {
        display:inline-block;
        height:80px;
        width:80px;
        margin-right: 5px;
        content: "";
        background:url(https://ipropal.com/images/enterpriseClient/andrea.png) no-repeat 0 0;
        background-size: 80px 80px;
        transform: translate(-120%, 130%);
        border-radius: 50%;

    }

    .carousel {
        background: #EEE;
    }

    .carousel-cell {
        width: 66%;
        height: 200px;
        margin-right: 10px;
        background: #8C8;
        border-radius: 5px;
        counter-increment: gallery-cell;
    }

    .mySlides {display:none;}


</style>


<!--<section id="banner" class="bimg">

        <div class="centered" >
        <h1>Transitive</h1>
        <p>A full responsive, business-oriented HTML5/CSS3 template<br />
            built by <a href="https://templated.co/">Templated</a> and released under the <a href="https://templated.co/license">Creative Commons</a>.</p>
        </div>

</section>
-->

<!--<section id="banner" data-video="Images/banner">
    <div class="inner">
        <h1>Transitive</h1>
        <p>A full responsive, business-oriented HTML5/CSS3 template<br />
            built by <a href="https://templated.co/">Templated</a> and released under the <a href="https://templated.co/license">Creative Commons</a>.</p>

    </div>
</section>



<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <a href="">
                    <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="">
                    <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="">
                    <i class="fab fa-snapchat fa-2x"></i>
                </a>
            </p>
            <p>
                <a href="/">
                    <img src="https://media-exp1.licdn.com/dms/image/C560BAQFUuSqW6xc71Q/company-logo_200_200/0?e=2159024400&v=beta&t=B49cbspR92zuQ38j1qCiZBox6wKzLGl9N-NqJKQqc2M" alt="Made with Allps" width="28" height="4">
                </a>
            </p>
        </div>
        -->


<section class="hero">
    <div class="content has-text-centered">
        <video autoplay muted loop id="myVideo">
            <source src="type.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <div class="cont">
            <h1 id="hdng">Ipropal</h1>
            <p>A one-stop smart solution to execute IT projects. At iProPal , we believe that any project big or small can be done through online collaboration. For small scale projects , hire top-notch IT freelancers online at iProPal.For large and complex IT projects, hire in-house ipropal team through iProPal enterprise .</p>
           <!-- <button id="myBtn" onclick="myFunction()">Pause</button>-->
            <a href="#one" class="button">Explore</a>
        </div>
    </div>

</section>


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<section id="one" class="section" >
    <div class="hero is-dark">
        <div class="container has-text-centered">
        <h1 style="font-family:Times New Roman">Products</h1>
        </div>
    </div>
        <div class="tile is-ancestor" >
            <div class="tile is-parent">
                <article class="tile is-child box" style="opacity:0.5">

                <div class="row">
                    <div class="column" style="padding-left:20px">
                        <h2 style="font-family:Times New Roman"><b>iPropal</b></h2>
                    <ul class="w3-ul">
                        <li> Hire verified IT freelancers online</li>
                        <li>Pay only when satisfied with work.</li>
                        <li>Manage work contracts and payments online.</li>
                        <li>Cost effective and time saving way to execute IT projects.</li>
                        <li> Post job free of cost and checkout smart matched freelancers instantly.</li>
                    </ul>
                    </div>

                    <div class="column">
                        <img src="Images\product.png" alt="ipropal" class="center">
                    </div>
                </div>

                </article>
            </div>


    </div>



</section>

<section class="section" >

    <div class="tile is-ancestor">
        <div class="tile is-parent">
            <article class="tile is-child box" style="opacity:0.5">

                <div class="row">
                    <div class="column">
                        <img src="Images\enterprise.png" alt="ipropal" id="onee">
                    </div>

                    <div class="column" style="padding-right:200px">
                        <h2 style="font-family:Times New Roman"><b>iPropal Enterprise</b></h2>
                        <ul class="w3-ul">
                            <li>iProPal Enterprise offers dedicated remote IT teams, to build high quality
                                solutions faster at best price</li>
                            <li>Let us know your requirements and we will find the right match for the project.</li>
                            <li>Hire agile team to develop large, complex and critical projects from end-to-end.</li>
                            <li>MVP and full-cycle services for startups, etc.</li>
                            <li> Our team is experienced in technologies like Java, JavaScript, Python, Angular,
                                ReactJS, VueJS, NodeJS, PHP, Laravel, Android, iOS,Docker, AWS,
                                MongoDB, MySQL, Kubernetes etc.</li>
                        </ul>
                    </div>
                </div>

            </article>
        </div>

    </div>

</section>

<section class="hero">
    <section class="mission" style="background-image: linear-gradient(135deg,#4B0082,rgba(255,39,112,0))">
        <div class="content has-text-centered">
            <h1 style="color: white;margin-top: 2rem">Trusted by</h1>
        </div>
            <div class="columns is-vcentered" style="margin-bottom:5rem">
                <div class="column is-offset-1" >
                    <a href="https://archetypesg.com/" target="_blank">
                        <img src="Images\archetype.png" alt="archetype" width="300" height="300">
                    </a>
                </div>
                <div class="column" >
                    <a href="https://elocations.com/" target="_blank">
                        <img src="Images\elocations.png" alt="elocations" width="300" height="300">
                    </a>
                </div>
                <div class="column">
                    <a href="https://billte.ch/" target="_blank">
                        <img src="Images\bilite.jpg" alt="bilite" width="300" height="300">
                    </a>
                </div>
                <div class="column" style="transform: translate(0%,-10%)">
                    <a href="https://vestun.com/" target="_blank">
                        <img src="Images\vestun.png" alt="vestun" width="220" height="20">
                    </a>
                </div>

        </div>
    </section>
</section>

<section class="hero">
    <section class="mission" style="background-image: linear-gradient(135deg,#C71585,rgba(255,39,112,0))">
        <div class="content has-text-centered" style="margin-bottom:3rem">
            <h1 style="color: white;margin-top: 4rem">"Smart Match" helps you to get the finest freelancers</h1>
            <p style="color: whitesmoke;margin-top: 3rem">Your project is not just a list of deadlines. It's a dynamic combination of tech, people and business. <strong style="color: whitesmoke">iProPal</strong> helps you find the right people to get the work done. <strong style="color: whitesmoke">"Smart Match"</strong> as the name suggests, intelligently matches your project requirements of skills, time and budget to the best fit. That means, less hassle in going through all the screening process. Less time spent and hence less money wasted. There's nothing to do but post a job and see the smart matched freelancer profiles.</p>
            <img src="Images\tablet.png" alt="image" width="500" height="50">
        </div>
    </section>
</section>

<section class="hero">
    <section class="mission" style="background-image: linear-gradient(135deg,#4B0082,rgba(255,39,112,0))">
        <div class="content has-text-centered" style="margin-bottom:3rem">
            <h1 style="color: white;margin-top: 4rem">The iProPal Advantage for Clients</h1>
            <p style="color: whitesmoke">The Absolute Safest, Most Flexible and Cost-Effective PlacePost your first job To Recruit, Hire, Manage and Pay Talent Globally.</p>
        </div>
        <div class="row" style="margin-bottom: 10px">
            <div class="column">
                <img src="https://ipropal.com/images/how-it-works/smart_client_2(1).png" alt="image" width="820" height="120" style="transform: translate(8%,-3%)">
            </div>
            <div class="column">
                <h4 class="one" style="color:#009ACD"><b>Curated Freelancers</b></h4>
                <p style="color: whitesmoke">All our freelancers are professionally tested through HackerEarth coding challenge.</p>
                <h4 class="two" style="color:#009ACD"><b>Hire the best smartly</b></h4>
                <p style="color: whitesmoke">No need to go through bulk of proposals to find the best. Proposals shown in order of smart match ranking.</p>
                <h4 class="three" style="color:#009ACD"><b>Post job free of cost</b></h4>
                <p style="color: whitesmoke">Post job for free and pay 99$ (iProPal charges) only if you hire .</p>
            </div>
        </div>
    </section>
</section>


<section class="hero">
    <section class="mission" style="background-image: linear-gradient(135deg,#C71585,rgba(255,39,112,0))">
        <div class="content has-text-centered" style="margin-bottom:3rem">
            <h1 style="color: white;margin-top: 4rem;font-family: Times">Testimonials</h1>
        </div>
        <div class="w3-content w3-section" style="max-width:500px; color: whitesmoke">
            <div class="mySlides w3-animate-right" style="margin-bottom: 76px; margin-top: -5rem" id="One">
                <h3><strong style="color:whitesmoke">Danny, Switzerland</strong></h3>
                <p>Working with iProPal Enterprise was better than we expected. Results were delivered on time and we even received extra support. We are very happy with iProPal Enterprise services.</p>
            </div>
            <div class="mySlides w3-animate-right" style="margin-bottom: 78px; color: whitesmoke; margin-top: -5rem" id="Two">
                <h3><strong style="color: whitesmoke">Andrea, Switzerland</strong></h3>
                <p>Working with iProPal Enterprise has been great, they are efficient and really skilled, the best IT team I ever had. I would highly recommend iProPal Enterprise for high quality and low cost IT teams. </p>
            </div>
        </div>
    </section>
</section>


<section class="hero">
    <section class="mission" style="background-image: linear-gradient(135deg,#4B0082,rgba(255,39,112,0))">
        <div class="content has-text-centered" style="margin-bottom:3rem">
            <h1 style="color: white;margin-top: 4rem">The iProPal Advantage for Freelancers</h1>
            <p style="color: whitesmoke">The Absolute Safest, Most Flexible and Cost-Effective Place To Recruit, Hire, Manage and Pay Talent Globally.</p>
        </div>
        <div class="row" style="margin-bottom: 10px">
            <div class="column" style="padding-left: 80px">
                <h4 class="four" style="color:#009ACD"><b>Smart Matched Jobs</b></h4>
                <p style="color: whitesmoke">Create your Smart Profile in 2-minutes and instantly see the matching Jobs.</p>
                <h4 class="five" style="color:#009ACD"><b>Best chance to get hired</b></h4>
                <p style="color: whitesmoke">If you are the best match for a job,your proposal is shown first to the client.</p>
                <h4 class="six" style="color:#009ACD"><b>Flat 8% per contract</b></h4>
                <p style="color: whitesmoke">Freelancers pay flat 8% per contract as iProPal fees!</p>
            </div>
            <div class="column">

                <img src="https://ipropal.com/images/how-it-works/smart_image_freelancer1.png" alt="image" width="820" height="120" style="transform: translate(-8%,-3%)">
            </div>
        </div>
    </section>
</section>



<footer class="footer">

        <div class="content has-text-centered">
            <p>
                <a href="/">
                    <img src="https://media-exp1.licdn.com/dms/image/C560BAQFUuSqW6xc71Q/company-logo_200_200/0?e=2159024400&v=beta&t=B49cbspR92zuQ38j1qCiZBox6wKzLGl9N-NqJKQqc2M" alt="Made with Allps Digital" width="50" height="30">
                </a>
            </p>
            <p style="color: white">&copy; 2018 All rights reserved.<br>
                <strong style="color: white">iProPal</strong>
                <a href="https://ipropal.com/" style="color:#0000EE">iProPal GmbH</a>
            </p>
        </div>

</footer>

<script>


    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 3000);
    }


    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");

    /*function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
        } else {
            video.pause();
            btn.innerHTML = "Play";
        }
    }*/

</script>

@endsection
