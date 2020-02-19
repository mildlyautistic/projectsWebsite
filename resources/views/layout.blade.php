<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Allps Template</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>

    <link href="default.css" rel="stylesheet"/>
    <link href="fonts.css" rel="stylesheet" />


</head>

<body>

<nav class="navbar is-dark">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="https://media-exp1.licdn.com/dms/image/C560BAQFUuSqW6xc71Q/company-logo_200_200/0?e=2159024400&v=beta&t=B49cbspR92zuQ38j1qCiZBox6wKzLGl9N-NqJKQqc2M" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
        </a>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="/" accesskey="1" title="">
                Home
            </a>
            <a class="navbar-item" href="/about" accesskey="2" title="">
                About Us
            </a>
            <a class="navbar-item" href="/tour" accesskey="3" title="">
                Tour
            </a>
            <a class="navbar-item" href="/contact" accesskey="4" title="">
                Contact
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="/documentation/overview/start/">
                    More
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="/documentation/overview/start/">
                        Mechandise
                    </a>
                    <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                        Extras
                    </a>
                    <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                        Media
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="field">
                    <div class="control">
                        <input class="input" type="text" placeholder="Search . . .">
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


@yield('content')
</body>

</html>