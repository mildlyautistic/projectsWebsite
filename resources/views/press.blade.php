@extends('layout')

@section('content')
    <style>
        .panel.callout {
            background: 0 0;
            border-radius: 5px;
            margin-bottom: 50px;
        }
        .panel.radius {
            border-radius: 3px;
        }
        .panel.callout {
            border-style: solid;
            border-width: 1px;
            border-color: #d8d8d8;
            margin-bottom: 10px;
            padding: 5px;
            background: #f2fafc;
            color: #333;
        }
        .panel {
            border-style: solid;
            border-width: 1px;
            border-color: #d8d8d8;
            margin-bottom: 10px;
            padding: 5px;
            background: #f2f2f2;
            color: #333;
        }
        div.logo {
            text-align: left;
            font-size: x-large;
            padding: 15px;
        }
        div.tile {
            width: 300px;
        }
        div.tile:hover {
            box-shadow: 0 0 15px #939393;
        }
        .title {
            font-size: 25px;
        }
        .subtitle {
            font-size: 18px;
        }
        .download-checkbox:hover {
            box-shadow: 0 0 15px #91e3e8;
        }
        .condition {
            padding-top: 5px;
            font-size: 15px;
        }
        .column {
            float: left;
            width: 30%;
            padding: 5px;
            /* height: 300px;*/ /* Should be removed. Only for demonstration */
        }
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
            padding: 60px;
        }
        div.name {
            text-align: left;
            font-size: x-large;
            padding: 15px;
        }
        a.button, a:visited.button {
            color: #fff;
            bottom: -20px;
            width: 100%;
            border-bottom-right-radius: .3em;
            border-bottom-left-radius: .3em;
        }
        .download-button:hover {
            background-color: #e8e8e8;
            box-shadow: 0 0 15px #939393;
        }
        @media only screen and (min-width: 40.0625em) {
            .button {
                -webkit-appearance: none;
                -moz-appearance: none;
                border-radius: 0;
                border-style: solid;
                border-width: 0;
                cursor: pointer;
                font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
                font-weight: 400;
                line-height: normal;
                margin: 0 0 1.25rem;
                position: relative;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                padding: 1rem 2rem 1.0625rem;
                font-size: 1rem;
                background-color: #2ba6cb;
                border-color: #2285a2;
                color: #fff;
                transition: background-color .3s ease-out;
            }
            a, a:visited {
                color: #128c7e;
                text-decoration: none;
            }
            a {
                background-color: transparent;
            }
            .naming-usage-box {
                margin-top: 25px;
            }
            .naming-icon {
                top: 20px;
                right: 135px;
                position: relative;
            }
            .naming-icon img {
                width: 38px;
            }
            img {
                display: inline-block;
                vertical-align: middle;
            }
            img {
                max-width: 100%;
                height: auto;
            }
            img, legend {
                border: 0;
            }
            .naming-caption {
                margin-left: -25px;
                position: relative;
                left: 20px;
                top: -5px;
            }
            .naming-caption-header {
                font-size: 20px;
                font-weight: 400;
                color: #555;
                position: relative;
                top: 15px;
                right: 110px;
            }
            .naming-caption-text {
                display: inline-block;
                margin-left: 25px;
                width: 85%;
                color: #555;
                font-weight: 300;
                margin-top: 11px;
                right: 30px;
                text-align: left;
                padding-left: 15px;
            }
            div.color {
                text-align: left;
                font-size: x-large;
                padding: 15px;
            }
            .color-caption > h5 {
                margin-top: 10px;
                margin-bottom: 5px;
            }
            h2 {
                color: #555;
                font-size: 26px;
                font-weight: 300;
                letter-spacing: .01em;
                margin-top: 20px;
                margin-bottom: 30px;
            }
            h2 {
                display: block;
                font-size: 1.5em;
                margin-block-start: 0.83em;
                margin-block-end: 0.83em;
                margin-inline-start: 0;
                margin-inline-end: 0;
                font-weight: bold;
            }
            h5 {
                color: #555;
                font-size: 40px;
                font-weight: 400;
                margin-top: 30px;
                margin-bottom: -16px;
                padding-top: 90px;
            }
            h5 {
                display: block;
                font-size: 20px;
                margin-block-start: 1.67em;
                margin-block-end: 1.67em;
                margin-inline-start: 0;
                margin-inline-end: 0;
                text-align: left;
            }
            .color-caption p {
                color: #555;
                font-weight: 300;
                margin-bottom: 100px;
                padding-right: 270px;
                margin-top: 4px;
                line-height: 22px;
            }
            .color-swatch {
                height: 115px;
                width: 200px;
                border-radius: 5px;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
                margin-top: 5px;
                padding-top: 30px;
            }
            div.screenshot {
                text-align: left;
                font-size: x-large;
                padding: 15px;
            }
            .screenshots-platforms ul {
                list-style-type: none;
            }
            .tabs {
                margin-left: -70px;
            }
            .tabs {
                margin-bottom: 0 !important;
                margin-left: 0;
            }
            ul {
                display: block;
                list-style-type: disc;
                padding-inline-start: 40px;
            }
            .tabs:after {
                clear: both;
            }
            .tabs:before, .tabs:after {
                content: " ";
                display: table;
            }
            .tabs .tab-title {
                display: inline !important;
                background-color: transparent !important;
            }
            .tabs dd, .tabs .tab-title {
                float: left;
                list-style: none;
                margin-bottom: 0 !important;
                position: relative;
            }
            .screenshots-platforms li {
                display: inline;
            }
            .tab-title {
                color: #bababa;
            }
            .tabs dd.active a, .tabs .tab-title.active a {
                background-color: #fff;
                color: #222;
            }
            .tab-title.active a {
                color: #8b8b8b !important;
                background-color: transparent !important;
            }
            .tabs dd > a, .tabs .tab-title > a {
                display: block;
                background-color: #efefef;
                color: #222;
                font-family: Roboto, Arial, sans-serif;
                font-size: 1rem;
                padding: 1rem 2rem;
            }
            .tabs dd > a, .tabs .tab-title > a {
                display: block;
                background-color: #efefef;
                color: #222;
                font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
                font-size: 1rem;
                padding: 1rem 2rem;
            }
            .screenshots-platforms a {
                color: #00bfa5 !important;
                font-size: 18px !important;
                text-decoration: none;
                padding-right: 78px !important;
                padding-left: 10px !important;
                font-weight: 300;
            }
            .screenshot-block {
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                -moz-border-top-left-radius: 5px;
                -moz-border-top-right-radius: 5px;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                margin-top: 50px;
                margin-bottom: 30px;
                padding: 10px;
            }
            .screenshot-copy {
                margin-top: 0;
                padding-top: 0;
                padding-left: 81px;
            }
            .screenshot-copy h5 {
                margin-top: 20px;
                font-weight: 400;
                font-size: 20px;
                color: #555555;
            }
            .screenshot-overlay {
                position: relative;
                bottom: 0;
                opacity: 0;
                z-index: 1;
                width: 100%;
                padding-left: 81px;
                padding-right: 45px;
                border-radius: 5px;
                color: #555555;
            }
            .screenshot-overlay p {
                background-color: #fff;
                font-size: 15px;
                padding-left: 0;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                padding-right: 20px;
                padding-top: 2px;
                width: 85%;
                margin-right: 20px;
            }
            .screenshot-download-checkbox {
                margin-right: 6px !important;
                zoom: 1.2;
                position: relative;
                bottom: 0;
            }
            .screenshot-download-checkbox:hover {
                box-shadow: 0 0 15px #91e3e8;
            }
            .screenshot-download-button {
                background-color: #e8e8e8;
                bottom: -10px;
                margin-left: -30px;
                width: 100% !important;
            }
            .screenshot-download-button:hover {
                background-color: #e8e8e8;
                box-shadow: 0 0 15px #939393;
            }
            div.promote {
                text-align: left;
                font-size: x-large;
                padding: 15px;
            }
            a, a:visited {
                color: #128c7e;
                text-decoration: none;
            }
            a {
                background-color: transparent;
            }
            .dot {
                padding-right: 20px;
                font-size: 18px;
            }
            li {
                text-align: -webkit-match-parent;
            }
            .screenshots-platforms ul {
                list-style-type: none;
            }
            ul {
                list-style-type: disc;
            }
            .get strong {
                color: #128c7e;
                font-weight: 300;
                text-align: left;
            }
            .get span {
                margin-left: 96px;
                font-size: 14px;
                white-space: nowrap;
                left: 100px;
                position: relative;
            }
            .get img {
                margin-right: 5px;
                margin-top: -2px;
            }
            div.brand_guidelines {
                text-align: left;
                font-size: x-large;
                padding: 15px;
            }
            div.legal-details {
                text-align: left;
                font-size: x-large;
                padding: 15px;
            }
            #brand-guidelines h3 {
                font-size: 22px;
                font-weight: 300;
                color: #555;
                margin-bottom: -5px;
                letter-spacing: .01em;
            }
            h3 {
                font-size: 18px;
                font-weight: 400;
                letter-spacing: .01em;
                margin-top: 30px;
                margin-bottom: 15px;
            }
            h3 {
                display: block;
                font-size: 1.17em;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 0;
                margin-inline-end: 0;
                font-weight: bold;
            }
            #guidelines-more {
                text-align: center;
                color: #00bfa5;
                font-size: 22px;
                font-weight: 300;
                cursor: pointer;
                cursor: hand;
            }
            #guidelines-less {
                text-align: center;
                color: #00bfa5;
                font-size: 22px;
                font-weight: 300;
                cursor: pointer;
                cursor: hand;
            }
            body {
                background-color: #f0f0f0;
                color: #8a8a8a;
                font-family: "Noto Sans CJK HK", sans-serif;
            }
            body {
                background: #fff;
                color: #222;
                cursor: auto;
                font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
                font-style: normal;
                font-weight: 400;
                line-height: 1.5;
                margin: 0;
                padding: 0;
                position: relative;
            }
        }
    </style>

    <section class="section">
        <div class="container has-text-centered">
            <h2 class="title">Press</h2>

            <div class="logo">
                <h2 id="logotype">Logo</h2>
            </div>
            <div class="panel callout radius">
                <p>
                    Don't combine the names or logos, or any portion of any of them, with any other logo,
                    company
                    name, mark, or generic terms. Don't edit, modify, distort, rotate, or re-color the logo.
                </p>
            </div>

            <div class="row">
                <div class="column">
                    <div class="tile is-ancestor">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <figure class="image">
                                    <img
                                        src="https://media-exp1.licdn.com/dms/image/C560BAQFUuSqW6xc71Q/company-logo_200_200/0?e=2159024400&v=beta&t=B49cbspR92zuQ38j1qCiZBox6wKzLGl9N-NqJKQqc2M"
                                        alt="Allps Logo" style="width: 200px; height: 150px; padding-left: 40px">
                                </figure>
                                <div class="logotype-caption" style="opacity: 1;">
                                    <p class="title">Allps Logo</p>
                                    <p class="subtitle">Use this whenever possible.</p>
                                </div>

                                <div class="logotype-overlay" style="opacity: 0.7;">
                                    <p class="condition">
                                        <label>
                                            <input class="download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a href="https://allps.ch/privacy.html"
                                                                        target="_blank">usage
                                            guidelines</a>.
                                    </p>

                                </div>
                                <a onclick="" class="button download-button" style="background-color:rgb(255,45,75);">Download</a>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="tile is-ancestor">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <figure class="image">
                                    <img
                                        src="https://ipropal.com/images/logo/mainwebsitelogodarker.svg"
                                        alt="iProPal Logo" style="width: 200px; height: 150px; padding-left: 40px">
                                </figure>
                                <div class="logotype-caption" style="opacity: 1;">
                                    <p class="title">iProPal Logo</p>
                                    <p class="subtitle">Use this whenever accessing from iProPal</p>
                                </div>

                                <div class="logotype-overlay" style="opacity: 0.7;">
                                    <p class="condition">
                                        <label>
                                            <input class="download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a href="https://ipropal.com/pages/privacy"
                                                                        target="_blank">privacy
                                            policy</a>.
                                    </p>

                                </div>
                                <a onclick="" class="button download-button" style="background-color:rgb(255,45,75);">Download</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container has-text-centered">

            <div class="name">
                <h2 id="naming">Naming Usage</h2>
            </div>
            <div class="panel callout radius">
                <p>
                    Never modify or abbreviate the names "Allps" or "iProPal." The "A" in "Allps" and first and second
                    "P" in iProPal are always
                    capitalized. Keep "Allps" and "iProPal" as single words.
                </p>
            </div>

            <div class="row">
                <div class="column">
                    <div>
                        <img class="naming-usage-box"
                             src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/naming-correct-box.png"
                             alt="correct logo name">
                    </div>
                    <span class="naming-icon">
                        <img src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/naming-correct.png"
                             alt="correct symbol">
                    </span>
                    <span class="naming-caption">
                        <span class="naming-caption-header">Correct</span>
                        <br>
                        <span class="naming-caption-text">Allps and iProPal are single words each and follows proper capitalization</span>
                    </span>
                </div>

                <div class="column">
                    <div>
                        <img class="naming-usage-box"
                             src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/naming-incorrect-box.png"
                             alt="wrong logo name">
                    </div>
                    <span class="naming-icon">
                        <img src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/naming-incorrect.png"
                             alt="incorrect symbol">
                    </span>
                    <span class="naming-caption">
                        <span class="naming-caption-header">Incorrect</span>
                        <br>
                        <span class="naming-caption-text">Never split Allps and iProPal into two words and always use the correct capitalization
</span>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container has-text-centered">
            <div class="color">
                <h2 id="coloring">Color</h2>
            </div>

            <div class="panel callout radius">
                <p>Allps and iProPal incorporates teal, green, blue and other colors throughout the app. Please use the
                    following colors accordingly.</p>
            </div>
            <div class="row">
                <div class="column">
                    <div class="color-swatch" style="background: #075e54;
    background: -moz-linear-gradient(left, #075e54 0%, #075e54 50%, #128c7e 50%, #128c7e 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, #075e54), color-stop(50%, #075e54), color-stop(50%, #128c7e), color-stop(100%, #128c7e));
    background: -webkit-linear-gradient(left, #075e54 0%, #075e54 50%, #128c7e 50%, #128c7e 100%);
    background: -o-linear-gradient(left, #075e54 0%, #075e54 50%, #128c7e 50%, #128c7e 100%);
    background: -ms-linear-gradient(left, #075e54 0%, #075e54 50%, #128c7e 50%, #128c7e 100%);
    background: linear-gradient(to right, #075e54 0%, #075e54 50%, #128c7e 50%, #128c7e 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#075e54', endColorstr='#128c7e', GradientType=1 );">
                        <div class="color-caption">
                            <h5>Teal Green</h5>
                            <p>#075E54<br>#128C7E</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="color-swatch" style="background: #25D366">
                        <div class="color-caption">
                            <h5>Light Green</h5>
                            <p>#25D366</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="color-swatch" style="background: #ff2d4b">
                        <div class="color-caption">
                            <h5>Allps Logo</h5>
                            <p>#ff2d4b</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="column">
                    <div class="color-swatch" style="background-color: #DCF8C6;">
                        <div class="color-caption">
                            <h5>Outgoing Chat Bubble</h5>
                            <p>#DCF8C6</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="color-swatch" style="background: #34B7F1">
                        <div class="color-caption">
                            <h5>Checkmark Blue</h5>
                            <p>#34B7F1</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="color-swatch" style="background: #ECE5DD">
                        <div class="color-caption">
                            <h5>Chat Background</h5>
                            <p>#ECE5DD</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container has-text-centered">

            <div class="screenshot">
                <h2 id="screenshots">Screenshots</h2>
            </div>
            <div class="panel callout radius">
                <p>
                    Please use these screenshots as is, and don't edit, modify, distort, rotate, or recolor the
                    screenshots.
                </p>
            </div>
            <div class="screenshots-platforms">
                <ul class="tabs main" data-tab>
                    <li class="tab-title active">
                        <a href="#panel-android" style="display:inline; background-color: transparent;"
                           aria-selected="true" tabindex="0">Android</a>
                        <span class="dot">.</span>
                    </li>
                    <li class="tab-title">
                        <a href="#panel-ios" style="display:inline; background-color: transparent;"
                           aria-selected="false" tabindex="-1">iOS</a>
                        <span class="dot">.</span>
                    </li>
                    <li class="tab-title">
                        <a href="#panel-windows-phone" style="display:inline; background-color: transparent;"
                           aria-selected="false" tabindex="-1">Windows Phone</a>
                        <span class="dot">.</span>
                    </li>
                    <li class="tab-title">
                        <a href="#panel-web" style="display:inline; background-color: transparent;"
                           aria-selected="false" tabindex="-1">Web</a>
                        <span class="dot">.</span>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="tabs-content">
                    <div id="panel-android" class="content active" aria-hidden="false">
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/chat-thumb-android-1.png"
                                        alt style="width: 270px; height: 450px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>Chats</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/photo-thumb-android-2.png"
                                        alt style="width: 270px; height: 450px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>Photo and video sending</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/calling-thumb-android-3.png"
                                        alt style="width: 270px; height: 450px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>WhatsApp Calling</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tabs-content">
                    <div id="panel-ios" class="content" aria-hidden="true" tabindex="-1">
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/chat-thumb-iphone-1.png"
                                        alt style="width: 270px; height: 450px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>Chats</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/photo-thumb-iphone-2.png"
                                        alt style="width: 270px; height: 450px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>Photo and video sending</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/calling-thumb-iphone-3.png"
                                        alt style="width: 270px; height: 450px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>WhatsApp Calling</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tabs-content">
                    <div id="panel-windows-phone" class="content" aria-hidden="true" tabindex="-1">
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/chat-thumb-wp-1.png"
                                        alt style="width: 270px; height: 450px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>Chats</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/photo-thumb-wp-2.png"
                                        alt style="width: 270px; height: 450px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>Photo and video sending</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/calling-thumb-wp-3.png"
                                        alt style="width: 270px; height: 450px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>WhatsApp Calling</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tabs-content">
                    <div id="panel-web" class="content" aria-hidden="true" tabindex="-1">
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/chat-thumb-web-1.png"
                                        alt style="width: 1800px; height: 360px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>Chats</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="screenshot-block" style="background-color:rgba(255,255,255,0);">
                                <div class="screenshot-box">
                                    <img
                                        src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/vm-thumb-web-2.png"
                                        alt style="width: 1800px; height: 360px">
                                </div>
                                <div class="screenshot-copy">
                                    <h5>Photo and video sending</h5>
                                    <p></p>
                                </div>
                                <div class="screenshot-overlay" style="opacity:1;">
                                    <p>
                                        <label>
                                            <input class="screenshot-download-checkbox" type="checkbox">
                                        </label>
                                        I have read and agree to the <a
                                            href="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/downloads/WhatsApp-Brand-Guidelines-Optimized.pdf"
                                            target="_blank">usage guidelines.</a>
                                    </p>
                                    <a onclick="" class="button screenshot-download-button"
                                       style="background-color: rgb(255,45,75);">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container has-text-centered">

            <div class="promote">
                <h2 id="promotions">Promoting your business presence on WhatsApp</h2>
            </div>
            <div class="panel callout radius">
                <p>
                    You may use the WhatsApp logo to help promote your business presence on WhatsApp if you are using
                    the WhatsApp Business app or the WhatsApp Business API and you adhere to all the guidelines and
                    instructions below.
                </p>
                <br>
                <p>
                    Always use a clear call to action that communicates your presence (for example, “Message us on
                    WhatsApp”), unless the WhatsApp logo is side-by-side with other social media icons.
                </p>
            </div>
            <div class="row">
                <div class="column">
                    <div>
                        <img class="naming-usage-box"
                             src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/message-us-correct.png"
                             alt="correct logo name">
                    </div>
                    <span class="naming-icon">
                        <img src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/naming-correct.png"
                             alt="correct symbol">
                    </span>
                    <span class="naming-caption">
                        <span class="naming-caption-header">Correct</span>
                        <br>
                        <span class="naming-caption-text">Use the Allps and iProPal logo shown above to promote your business presence on WhatsApp</span>
                    </span>
                </div>
                <div class="column">
                    <div>
                        <img class="naming-usage-box"
                             src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/message-us-incorrect.png"
                             alt="Incorrect logo name">
                    </div>
                    <span class="naming-icon">
                        <img src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/naming-incorrect.png"
                             alt="Incorrect symbol">
                    </span>
                    <span class="naming-caption">
                        <span class="naming-caption-header">Incorrect</span>
                        <br>
                        <span class="naming-caption-text">Never use the WhatsApp Business app icon to promote your business presence on WhatsApp</span>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <div class="container has-text-centered">
        <h2 id="naming-usage"></h2>
        <div class="panel callout radius">
            <p>
                Use WA.me links as short URLs that can instantly open a conversation with your business. To create your
                own link, use <code>https://wa.me/</code> followed by your business' full phone number in international
                format (e.g. wa.me/15551234567). Place the WA.me link on a website, app, flyer, SMS, email, and such to
                help people easily find you on WhatsApp.
                <br>
                <a href="https://faq.whatsapp.com/en/android/26000030/" target="_blank">Learn more about wa.me
                    links.</a>
            </p>
        </div>
    </div>

    <div class="container has-text-centered">
        <div class="row" style="display: flex; justify-content: center;">
            <div class="column">
                <div>
                    <img src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/wa-me-example.png" alt
                         style="width: 450px ;height: 180px">
                </div>
            </div>
        </div>
    </div>

    <div class="container has-text-centered">
        <div style="max-height: 80px;" class="panel get callout radius">
            <p>
                <strong>Get the complete Allps and iProPal asset library</strong>
                <span id="get-zip-archive" class="asset-download">
                    <a data-dropdown="dropdown-zip-archive" onclick="return false;" aria-controls="dropdown-zip-archive"
                       aria-expanded="false">
                        <img src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/zip-icon.png" alt
                             width="24" height="24">Zip Archive
                    </a>
                </span>
            </p>
        </div>
    </div>

    <section class="section">
        <div class="container has-text-centered">
            <div class="brand_guidelines" style="overflow: hidden">
                <div id="guidelines-preview">
                    <h2 id="guidelines">Brand Guidelines</h2>
                    <h3 id="#introduction">Introduction</h3>
                    <p>
                        As a condition to using the WhatsApp brand assets ("WhatsApp Brand Resources"), you agree to all
                        the guidelines and instructions below ("Guidelines").</p>
                    <p>
                        These Guidelines clarify the ways you can and cannot use the WhatsApp Brand Resources for
                        marketing and other purposes. These Guidelines also contain legal disclosures and a general set
                        of questions and answers that address common inquiries and concerns.</p>
                </div>
            </div>
            <div class="legal-details" style>
                <h3 id="general-guidelines">General Guidelines</h3>
                <p>Use the WhatsApp name and logos found on our WhatsApp Brand Guidelines website only, and not those
                    found anywhere else. Make sure you check the WhatsApp Brand Resources in these Guidelines often to
                    ensure you're using the most current version.</p>
                <p>Do not use other trademarks, names, domain names, logos, or other content that could be confused with
                    WhatsApp.</p>
                <p>When you're talking about WhatsApp, always capitalize the letters "W" and "A," and never modify or
                    abbreviate the word "WhatsApp."</p>
                <p>Remember to display the word WhatsApp in the same font size and style as the content surrounding it,
                    and never use any of the WhatsApp logos to replace the word WhatsApp in a sentence.</p>

                <h3 id="legal">Legal</h3>
                <p>The WhatsApp name and logos are trademarks of WhatsApp and may only be used as described in these
                    Guidelines. Avoid using the WhatsApp Brand Resources for anything that would be inconsistent with
                    WhatsApp's Terms of Service and these Guidelines. We may evaluate your use of the WhatsApp Brand
                    Resources at any time to determine if you are violating our Terms of Service or these Guidelines. We may
                    also revoke your permission to use the WhatsApp Brand Resources at any time.
                </p>
            </div>
            <div class="borderBtm"></div>
            <div id="guidelines-more" style="display: block;">
                <div>
                    <img style="width: 14px; height: 7px;"
                         src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/downcarat.png" alt>
                </div>
                <div>More</div>
            </div>
            <div id="guidelines-less" style="display: none;">
                <div>
                    <img style="width: 14px; height: 7px;"
                         src="https://whatsappbrand.com/wp-content/themes/whatsapp-brc/images/upcarat.png" alt>
                </div>
                <div>Less</div>
            </div>
        </div>
    </section>
@endsection
