<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/Style.css"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="icon" type="image/png" href="Images/f-logo.png">
    <title>Frederic Desautels</title>
    <style>

        a {
            color: white;
            display: inline-block;
            text-decoration: none;
            font-weight: 400
        }


        .underlineHover:after {
            display: block;
            left: 0;
            bottom: -10px;
            width: 0;
            height: 2px;
            background-color: #56baed;
            content: "";
            transition: width .2s
        }

        .underlineHover:hover {
            color: #222;
            text-decoration: none
        }

        .underlineHover:hover:after {
            width: 100%
        }

        :focus {
            outline: 0
        }

        .underlineHover {
            color: #888;
        }

        .contact {
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -125px;
            margin-top: -125px;
            height: 250px;
            width: 250px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 2px;
            -ms-border-radius: 2px;
            -moz-border-radius: 2px;
            -o-border-radius: 2px;
            -webkit-border-radius: 2px;
        }

        .contact .envelope {
            position: absolute;
            height: 93px;
            width: 165px;
            left: 50%;
            margin-left: -83px;
            top: 50%;
            margin-top: -50px;
            background: #F9F9F9;
            transition: margin-top 300ms;
            -ms-transition: margin-top 300ms;
            -moz-transition: margin-top 300ms;
            -o-transition: margin-top 300ms;
            -webkit-transition: margin-top 300ms;
        }

        .contact:hover .envelope {
            transition-delay: 150ms;
            -ms-transition-delay: 150ms;
            -moz-transition-delay: 150ms;
            -o-transition-delay: 150ms;
            margin-top: -20px;
        }

        .contact .envelope .top {
            position: absolute;
            top: -3px;
            left: 0;
            width: 100%;
            height: 73px;
            z-index: 30;
            overflow: hidden;
            transform-origin: top;
            -ms-transform-origin: top;
            -moz-transform-origin: top;
            -o-transform-origin: top;
            -webkit-transform-origin: top;
            transition: transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
            -ms-transition: -ms-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
            -moz-transition: -moz-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
            -o-transition: -o-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
            -webkit-transition: -webkit-transform 300ms 150ms, z-index 0ms 150ms, height 300ms 0ms, top 300ms 0ms;
        }

        .contact:hover .envelope .top {
            transition: transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
            -ms-transition: -ms-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
            -moz-transition: -moz-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
            -o-transition: -o-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
            -webkit-transition: -webkit-transform 300ms 0ms, height 300ms 150ms, top 300ms 150ms;
            height: 10px;
            top: -60px;
            transform: rotateX(180deg);
            -ms-transform: rotateX(180deg);
            -moz-transform: rotateX(180deg);
            -o-transform: rotateX(180deg);
            -webkit-transform: rotateX(180deg);
        }

        .contact .envelope .outer {
            position: absolute;
            bottom: 0;
            left: 0;
            border-left: 83px solid transparent;
            border-right: 82px solid transparent;
            border-top: 70px solid #EEE;
        }

        .contact .envelope .outer .inner {
            position: absolute;
            left: -81px;
            top: -73px;
            border-left: 81px solid transparent;
            border-right: 80px solid transparent;
            border-top: 68px solid #333;
        }

        .contact .envelope .bottom {
            position: absolute;
            z-index: 20;
            bottom: 0;
            left: 2px;
            border-left: 81px solid transparent;
            border-right: 80px solid transparent;
            border-bottom: 45px solid #333;
        }

        .contact .envelope .left {
            position: absolute;
            z-index: 20;
            top: 0;
            left: 0;
            border-left: 81px solid #333;
            border-top: 45px solid transparent;
            border-bottom: 45px solid transparent;
        }

        .contact .envelope .right {
            position: absolute;
            z-index: 20;
            top: 0;
            right: 0;
            border-right: 80px solid #333;
            border-top: 45px solid transparent;
            border-bottom: 45px solid transparent;
        }

        .contact .envelope .cover {
            position: absolute;
            z-index: 15;
            bottom: 0;
            left: 0;
            height: 55%;
            width: 100%;
            background: #EEE;
        }

        .contact .envelope .paper {
            position: absolute;
            height: 83px;
            padding-top: 10px;
            width: 100%;
            top: 0;
            left: 0;
            background: #F9F9F9;
            z-index: 10;
            transition: margin-top 300ms 0ms;
            -ms-transition: margin-top 300ms 0ms;
            -moz-transition: margin-top 300ms 0ms;
            -o-transition: margin-top 300ms 0ms;
            -webkit-transition: margin-top 300ms 0ms;
        }

        .contact:hover .envelope .paper {
            margin-top: -60px;
            transition: margin-top 300ms 150ms;
            -ms-transition: margin-top 300ms 150ms;
            -moz-transition: margin-top 300ms 150ms;
            -o-transition: margin-top 300ms 150ms;
            -webkit-transition: margin-top 300ms 150ms;
        }

        .contact .envelope .paper a {
            position: relative;
            display: block;
            font-size: 14px;
            margin: 5px 5px 0;
            text-align: center;
            color: #333;
            text-decoration: none;
        }

        .contact .envelope .paper a.call .i {
            position: absolute;
            top: 2px;
            left: 20px;
            display: inline-block;
            width: 3px;
            height: 5px;
            border-width: 5px 0 5px 2px;
            border-style: solid;
            border-color: #555;
            background: transparent;
            transform: rotate(-30deg);
            -ms-transform: rotate(-30deg);
            -moz-transform: rotate(-30deg);
            -o-transform: rotate(-30deg);
            -webkit-transform: rotate(-30deg);
            border-top-left-radius: 3px 5px;
            border-bottom-left-radius: 3px 5px;
            -moz-border-radius-topleft: 3px 5px;
            -moz-border-radius-bottomleft: 3px 5px;
            -webkit-border-top-left-radius: 3px 5px;
            -webkit-border-bottom-left-radius: 3px 5px;
            transition: border-color 300ms;
            -ms-transition: border-color 300ms;
            -moz-transition: border-color 300ms;
            -o-transition: border-color 300ms;
            -webkit-transition: border-color 300ms;
        }

        .contact .envelope .paper a {
            color: #444;
            transition: color 200ms;
            -ms-transition: color 200ms;
            -moz-transition: color 200ms;
            -o-transition: color 200ms;
            -webkit-transition: color 200ms;
        }

        .contact .envelope .paper a:hover {
            color: #000;
        }

        .contact .envelope .paper a.call:hover .i {
            border-color: #DDD;
        }

        .contact .envelope .paper a.mail .i {
            position: absolute;
            top: 0;
            left: 17px;
            display: inline-block;
            font-size: 13px;
            font-weight: bold;
        }

        .button--linkedin {
            bottom: 75px;
        }

        @media screen and (max-width: 500px) {
            h1 {
                font-size: 39px;
            }

            .button--linkedin {
                bottom: 40px;
            }
        }

    </style>
</head>
<body style="background-color: #212529;">
<header>
    <ul class="header__meta">
        <li><a href="index.html"><img src="Images/f-logo.png" alt="f-logo" style="margin-bottom: -8px"></a></li>
        <li><a href="Projects.php">Projects</a></li>
        <li><a href="hobbies.php">Hobbies</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</header>
<div style="text-align: center">
    <h1>Frederic Desautels</h1>
    <div class="contact">
        <div class="envelope">
            <div class="top">
                <div class="outer">
                    <div class="inner"></div>
                </div>
            </div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
            <div class="cover"></div>
            <div class="paper">
                <a class="email-mailto underlineHover" href="mailto:fredesautels@gmail.com">fredesautels@gmail.com</a>
            </div>
        </div>
    </div>
</div>
<footer class="footer" style="position: fixed; bottom: 0; text-align: center; width: 100%; opacity: 1">
        <a class="button button--primary button--linkedin bubbly-button"
           href="https://www.linkedin.com/in/frederic-desautels/">
            <div class="button__icon"></div>
            <div class="button__text">
                <span class="button__action">Linkedin</span>
                <span class="button__kind">Profile</span>
            </div>
        </a>
    <div class="container container--large">
        &copy; Copyright 2020, Frederic Desautels
    </div>
</footer>
<script src="scripts.js"></script>
</body>