<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/Style.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="icon" type="image/png" href="Images/f-logo.png">
    <title>Frederic Desautels</title>
</head>
<body style="overflow-x: hidden">
<header class="header">
    <ul class="header__meta">
        <li><a href="index.php"><img src="Images/f-logo.png" alt="f-logo" style="margin-bottom: -8px"></a></li>
        <li><a href="Projects.php">Projects</a></li>
        <li><a href="hobbies.php">Hobbies</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="container">
        <div class="header__introduction">
            <h1>Frederic Desautels</h1>
            <p>An agile developer and network technician with
                experience in legacy and modern technologies as well as a DEC in Computer Science from Champlain
                College.</p>
            <img src="Images/me.jpg" alt="me" width="60%" style="border-radius: 50%;">
            <section class="buttons">
                <a class="button button--primary button--linkedin bubbly-button"
                   href="https://www.linkedin.com/in/frederic-desautels/">
                    <div class="button__icon"></div>
                    <div class="button__text">
                        <span class="button__action">Linkedin</span>
                        <span class="button__kind">Profile</span>
                    </div>
                </a>
                <a class="button button--secondary button--github bubbly-button" href="https://github.com/mrwompwomp">
                    <div class="button__icon"></div>
                    <div class="button__text">
                        <span class="button__action">Github</span>
                        <span class="button__kind">Profile</span>
                    </div>
                </a>
            </section>
        </div>
    </div>

    <a class="header__scroll scroll" href="#about">
        <span class="scroll__text">About Me</span>
        <img src="./Images/arrow-down.svg" alt="down-arrow">
    </a>

    <canvas class="header__background"></canvas>
</header>

<div class="about">
    <a name="about"></a>
    <div data-aos="fade-right" style="float:left; width: 40%; margin-left: 10%">
        <h2 style="color: white">Champlain College Saint Lambert</h2>
        <p>In 2017, I was the recipient of the "Bourses de promotion des programmes de formation menant aux
            professions priorisées par la CPMT"</p>
        <p>In 2018, I was elected to be part of the Champlain Student Association where I brought change and
            innovation. </p>
        <p>In 2020, I completed the Computer Science - Legacy to Mobile program.</p>
    </div>
    <div data-aos="fade-left" style="float: right; width: 45%">
        <img src="Images/CSA.jpg" alt="CSA" width="80%">
    </div>
    <div style="clear: both"></div>
    <hr>
    <div data-aos="fade-right" style="float: left; width: 45%;margin-left: 10%">
        <img src="Images/Maker%20Faire%202017.jpg" alt="Maker Faire" width="80%">
    </div>
    <div data-aos="fade-left" style="float:right; width: 40%; margin-right: 5%">
        <h2 style="color: white">World Maker Faire NYC</h2>
        <p>In 2017 and 2018, I attended World Maker Faire in NYC where I represented Cemetech.net, an online forum
            dedicated to graphing calculator hacking. </p>
        <p>Maker Faire is an all-ages gathering of tech enthusiasts, crafters, educators, tinkerers, hobbyists,
            engineers, science clubs, authors, artists, students, and commercial exhibitors. All of these “makers” come
            to Maker Faire to show what they have made and to share what they have learned.</p>
    </div>
    <div style="clear: both"></div>
    <hr>
    <div data-aos="fade-right" style="float:left; width: 40%; margin-left: 10%">
        <h2 style="color: white">Bell Canada</h2>
        <p>Since 2016, I've been working as a business service technician for the mid-large enterprise service assurance
            division of Bell
            Canada.</p>
        <p>Main tasks include</p>
        <ul>
            <li>Diagnosing issues</li>
            <li>Dispatching external technicians</li>
            <li>Monitoring portions of the network</li>
            <li>Performing sanity checks</li>
            <li>Working with other service providers</li>
        </ul>
    </div>
    <div data-aos="fade-left" style="float: right; width: 45%">
        <img src="Images/BCE.jpg" alt="BCE" width="80%">
    </div>
    <div style="clear: both"></div>
    <hr>
    <div data-aos="fade-right" style="float: left; width: 45%;margin-left: 10%">
        <img src="Images/CCNA_2.jpg" alt="CCNA" width="80%">
    </div>
    <div data-aos="fade-left" style="float:right; width: 40%; margin-right: 5%">
        <h2 style="color: white">Cisco Certified Network Associate Routing & Switching</h2>
        <p>In 2017, I completed the CCNA certification from Cégep de Matane.</p>
        <p>CCNA is an IT associate-level Cisco Career certification. This certification covers the fundamentals of
            routing, switching, network security and programming for Cisco Systems</p>
    </div>
    <div style="clear: both"></div>
    <footer class="footer">
        <div class="container container--large">
            &copy; Copyright 2020, Frederic Desautels
        </div>

        <a class="footer__scroll" href="#"><img src="./Images/arrow-down.svg" alt="down-arrow"></a>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
    <script>
        window.onload = function () {
            Particles.init({
                selector: '.header__background',
                color: '#75A5B7',
                speed: 1,
                maxParticles: 100,
                connectParticles: true,
                responsive: [
                    {
                        breakpoint: 768,
                        options: {
                            maxParticles: 80
                        }
                    }, {
                        breakpoint: 375,
                        options: {
                            maxParticles: 50
                        }
                    }
                ]
            });
        };

        AOS.init();

    </script>
    <script src="scripts.js"></script>
</body>