<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/Style.css"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="icon" type="image/png" href="Images/f-logo.png">
    <title>Frederic Desautels</title>

    <style>
        .column {
            color: #eee;
            float: left;
            width: 30%;
            margin: 10px;
            height: 65%;
            background-color: #888;
            cursor: pointer;
        }

        .column-1 {
            margin-left: 3%;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .responsiveImage {
            width: 90%;
        }

        @media screen and (max-width: 715px) {
            .column {
                width: 100%;
                margin: 0 0 1vh 0;
            }

            .column-1 {
                margin-left: 0;
            }

            .column-modal {
                width: 100%;
                display: block;
                float: none !important;
            }

            .modal-content {
                margin: auto;
                width: 100% !important;
            }

            .responsiveImage {
                height: 80%;
                width: unset;
            }
        }

        .grow {
            transition: all .2s ease-in-out;
        }

        .grow:hover {
            transform: scale(1.08);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 9vh;
            width: 100%;
            height: 100%;
            color: black;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            width: 80%;
        }

        .close {
            color: #ddd;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover, .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 2vw;
            background-color: #111;
            color: #ccc;
        }

        .modal-body {
            padding: 2px 16px;
        }

        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }

        .column-modal {
            width: 49%;
            display: inline;
        }

    </style>
</head>
<body style="background-color: #212529;">
<header>
    <ul class="header__meta">
        <li><a href="index.php"><img src="Images/f-logo.png" alt="f-logo" style="margin-bottom: -8px"></a></li>
        <li><a href="Projects.php">Projects</a></li>
        <li><a href="hobbies.php">Hobbies</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</header>
<div style="text-align: center;">
    <div class="row">
        <div class="column column-1 grow btn" id="myBtn1">
            <h2>ASP TPS</h2>
            <img src="Images/TPS_1.JPG" alt="TPS" class="responsiveImage">
        </div>
        <div class="column grow btn" id="myBtn2">
            <h2>Space Dots</h2>
            <img src="Images/SpaceDots.JPG" alt="TPS" class="responsiveImage">
        </div>
        <div class="column grow btn" id="myBtn3">
            <h2>Notes+</h2>
            <img src="Images/Notes_2.JPG" alt="TPS" class="responsiveImage">
        </div>
    </div>
</div>
<div id="myModal1" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>ASP-TPS</h2>
        </div>
        <div class="modal-body">
            <div class="column-modal" style="float: left; padding-right: 2vw">
                <img src="Images/TPS_2.JPG"
                     style="width: 100%; margin-top: 1vw;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                     alt="TPS2">
            </div>
            <div class="column-modal">
                <p>A Timesheet Processing System written for ActionSportPhysio Health and Wellness clinics.</p>
                <p>The web application is written in PHP and uses a MySQLi database. </p>
                <h4 style="padding-top: 2vh">Main features</h4>
                <ol style="list-style-type: none; padding: 0">
                    <li>Sign-up, Login and Password Recovery</li>
                    <li>Different role-based access levels</li>
                    <li>Custom report generation</li>
                    <li>Timesheet entry, modification and approval system</li>
                    <li>Employee management system</li>
                    <li>Personalized user preferences</li>
                    <li>Built-in French and English versions</li>
                </ol>
                <div style="clear:both;"><br></div>
            </div>
        </div>
    </div>
</div>
<div id="myModal2" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Space Dots</h2>
        </div>
        <div class="modal-body">
            <div class="column-modal" style="float: left; padding-right: 2vw">
                <img src="Images/SpaceDots_2.JPG"
                     style="width: 100%; margin-top: 1vw;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            </div>
            <div class="column-modal">
                <p>A modern take on the classic arcade game Asteroids</p>
                <p>The game is written in C# in Unity</p>
                <h4 style="padding-top: 2vh">Main features</h4>
                <ol style="list-style-type: none; padding: 0">
                    <li>Multiplayer support using the NetworkManagerHUD component</li>
                    <li>2D kinematic acceleration, velocity and position physics</li>
                    <li>Power-ups such as shields and speed</li>
                    <li>Different types of asteroids that give different upgrades</li>
                    <li>Mesh colliders on ships, projectiles and asteroids</li>
                </ol>
                <div style="clear:both;"><br></div>
            </div>
        </div>
    </div>
</div>
<div id="myModal3" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Notes+</h2>
        </div>
        <div class="modal-body">
            <div class="column-modal" style="float: left; padding-right: 2vw">
                <img src="Images/Notes_2.JPG"
                     style="width: 100%; margin-top: 1vw;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                     alt="Notes">
            </div>
            <div class="column-modal">
                <p>A bare-bones note-taking Android app</p>
                <p>The app is written in Java.</p>
                <h4 style="padding-top: 2vh">Main features</h4>
                <ol style="list-style-type: none; padding: 0">
                    <li>Trading data between views and fragments</li>
                    <li>Fast UI that implements a recyclerView with cardViews as row templates</li>
                    <li>A Datepicker Dialog to attach dates to notes</li>
                    <li>Database management with SQLiteOpenHelper</li>
                    <li>Toolbar widget for navigation</li>
                </ol>
                <div style="clear:both;"><br></div>
            </div>
        </div>
    </div>
</div>
<script>
    const forEach = function (array, callback, scope) {
        for (let i = 0; i < array.length; i++) {
            callback.call(scope, i, array[i]); // passes back stuff we need
        }
    };
    const close = document.querySelectorAll(".close, .modal");
    const modal = document.getElementsByClassName("modal");
    const btns = document.getElementsByClassName("btn");
    forEach(btns, function (index) {
        btns[index].onclick = function () {
            modal[index].style.display = "block";
        }
    });
    window.onclick = function (event) {
        forEach(close, function (index, value) {
            if (value === event.target) {
                forEach(modal, function (index) {
                    modal[index].style.display = "none";
                });
            }
        });
    }
</script>
<footer class="footer">
    <div class="container container--large">
        &copy; Copyright 2020, Frederic Desautels
    </div>
</footer>
</body>