<?php $hash = $_SERVER['QUERY_STRING']; ?>

<!doctype html>
<html lang="en">
<head>
    <!--- Metadata --->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio for Joe Parsons-Dorman">
    <meta name="author" content="Joe Parsons-Dorman">


    <title>Joe Dorman</title>

    <!--- CSS --->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/slideshow.css">
    <link rel="stylesheet" href="css/main.css">
</head>


<body>
<header>
    <div class="material-icons-component" id="menu-button"><i class="material-icons">menu</i></div>
    <div id="logo"><img src="img/logo.png"/></div>
    <div id="nav-container">
        <nav data-open="false">
            <div id="work" class="nav-item"><span>Work</span></div>
            <div id="education" class="nav-item"><span>Education</span></div>
            <div id="interests" class="nav-item"><span>Interests</span></div>
            <div id="references" class="nav-item"><span>References</span></div>
            <div id="contact" class="nav-item"><span>Contact</span></div>
        </nav>
        <div id="nav-shade"></div>
    </div>
</header>

<section id="page-container">
    <main>

        <!------------------------------------------- Hero Videos ----------------------------------------------------->
        <div id="hero">
            <div id="slideshow-container" data-max-height="450" data-slide-number="1">
                <div class="slide" id="slide-1">
                    <video <!--autoplay--> loop>
                    <source src="video/video_1.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="slide" id="slide-2">
                    <video loop>
                        <source src="video/video_2.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="slide" id="slide-3">
                    <video loop>
                        <source src="video/video_3.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="slide" id="slide-4">
                    <video loop>
                        <source src="video/video_4.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="slide" id="slide-5">
                    <video loop>
                        <source src="video/video_5.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="arrow-container" id="arrow-container-left">
                    <i class="material-icons">keyboard_arrow_left</i>
                </div>
                <div class="arrow-container" id="arrow-container-right">
                    <i class="material-icons">keyboard_arrow_right</i>
                </div>
                <div id="hero-pause"><i class="material-icons">pause</i></div>
            </div>
        </div>


        <!--------------------------------------- Personal Statement -------------------------------------------------->
        <?php if ($hash != "") {
            include("ssi/personalStatement.php");
        } ?>


        <!---------------------------------------- Work + Projects ---------------------------------------------------->
        <div id="work-section" class="page-section">

            <div class="width-restrict">
                <h2>Projects & Work</h2>

                <!----------------------------------- Company - Freelance --------------------------------------------->
                <div id="freelance" class="company-container">
                    <div class="stripe"></div>
                    <div class="content-container">
                        <div class="company-top-parallelogram-container">
                            <div class="img-banner">
                                <span>Freelance</span>
                            </div>
                            <div class="faux-parallelogram"></div>
                        </div>

                        <div class="company-content">
                            <div class="company-details">
                                <div class="company-details-inner">
                                    <p>
                                        <span>Job Title:</span> Web Developer (June 2017 - Current)
                                    </p>
                                    <p>
                                        <span>Company:</span> N/a
                                    </p>
                                    <p>
                                        <span>Location:</span> Bristol
                                    </p>
                                </div>
                            </div>

                            <!----------------------------- Project - Pokemon Practice -------------------------------->
                            <div class="project" id="vantage-cloud">
                                <div class="project-parallelogram-container">
                                    <div class="true-parallelogram"><img
                                                src="img/pokemon-project-background.PNG"/>
                                        <div class="shade"></div>
                                    </div>
                                    <div class="project-title"><span>A-Frame Pokemon</span></div>
                                </div>

                                <div class="project-content">
                                    <div class="project-content-inner">
                                        <h5>Key Skills:</h5>
                                        <ul>
                                            <li>A-Frame</li>
                                            <li>Javascript</li>
                                            <li>HTML 5</li>
                                        </ul>

                                        <h5>Link:</h5>
                                        <a href="http://jp-dorman.co.uk/aframe-tests/3">
                                            jp-dorman.co.uk/aframe-tests/3
                                        </a>

                                        <h5>Role + Responsibilities:</h5>
                                        <p>
                                            This is my main project developed in A-Frame. I chose to make a game as it’s
                                            a more complicated task than 3d video and so allows me to use and adapt my
                                            JavaScript coding abilities to VR development.
                                        </p>

                                        <p>
                                            I found A-Frame to be an incredibly useful and versatile tool for Web VR
                                            that could be used to make anything from a mobile app to a fully fledged
                                            Vive application.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!----------------------------- Project - Pokemon Practice -------------------------------->
                            <div class="project" id="vantage-cloud">
                                <div class="project-parallelogram-container">
                                    <div class="true-parallelogram"><img
                                                src="img/image-gallery-project-background.PNG"/>
                                        <div class="shade"></div>
                                    </div>
                                    <div class="project-title"><span>360 Image Gallery</span></div>
                                </div>

                                <div class="project-content">
                                    <div class="project-content-inner">
                                        <h5>Key Skills:</h5>
                                        <ul>
                                            <li>A-Frame</li>
                                            <li>Javascript</li>
                                            <li>HTML 5</li>
                                        </ul>

                                        <h5>Link:</h5>
                                        <a href="http://jp-dorman.co.uk/aframe-tests/2/2">
                                            jp-dorman.co.uk/aframe-tests/2/2
                                        </a>

                                        <h5>Role + Responsibilities:</h5>
                                        <p>
                                            This was the first A-Frame project in which I went above and beyond the
                                            limits of the tutorial, adding my own entry into the standard image gallery
                                            and a loading function to make the page load more user friendly.
                                            This was my first step towards creating the Pokemon VR application.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="company-bottom-parallelogram-container">
                            <div class="rectangle"></div>
                            <div class="faux-parallelogram"></div>
                        </div>
                    </div>
                </div>


                <!---------------------------------- Company - Layered Tech ------------------------------------------->
                <div id="layered-tech" class="company-container">
                    <div class="stripe"></div>
                    <div class="content-container">
                        <div class="company-top-parallelogram-container">
                            <div class="img-banner">
                                <img src="img/ltech_white.png"/>
                            </div>
                            <div class="faux-parallelogram"></div>
                        </div>

                        <div class="company-content">
                            <div class="company-details">
                                <div class="company-details-inner">
                                    <p>
                                        <span>Job Title:</span> Web Developer (September 2015 - Current)
                                    </p>
                                    <p>
                                        <span>Company:</span> Layered Technologies
                                        (<a href="http://www.layeredtech.co.uk">layeredtech.co.uk</a>)
                                    </p>
                                    <p>
                                        <span>Location:</span> Bristol
                                    </p>
                                </div>
                            </div>

                            <!--------------------------------- Project - Vantage ------------------------------------->
                            <div class="project" id="vantage-cloud">
                                <div class="project-parallelogram-container">
                                    <div class="true-parallelogram"><img
                                                src="img/vantage-cloud-project-background.PNG"/>
                                        <div class="shade"></div>
                                    </div>
                                    <div class="project-title"><span>Vantage Cloud</span></div>
                                </div>

                                <div class="project-content">
                                    <div class="project-content-inner">
                                        <h5>Key Skills:</h5>
                                        <ul>
                                            <li>HTML 5</li>
                                            <li>SCSS</li>
                                            <li>Javascript</li>
                                        </ul>

                                        <h5>Link:</h5>
                                        <p>
                                            Not Available
                                        </p>

                                        <h5>Role + Responsibilities:</h5>
                                        <p>
                                            From the start I was the only front end developer assigned to this project,
                                            with occasional input and suggestions from the back end team. Everything I
                                            worked on in this piece of cloud software was built in-house, (save for the
                                            custom scrollbars) from scratch for maximum customisability and brand
                                            recognition.
                                        </p>

                                        <p>
                                            This has been the most complex project I have worked on to date and has
                                            since become the flagship product for Layered Technologies.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!---------------------------- Project - Cluster Digital ---------------------------------->
                            <div class="project" id="cluster-digital">
                                <div class="project-parallelogram-container">
                                    <div class="true-parallelogram"><img
                                                src="img/cluster-digital-project-background.PNG"/>
                                        <div class="shade"></div>
                                    </div>
                                    <div class="project-title"><span>Cluster Digital</span></div>
                                </div>

                                <div class="project-content">
                                    <div class="project-content-inner">
                                        <h5>Key Skills:</h5>
                                        <ul>
                                            <li>PHP</li>
                                            <li>Javascript</li>
                                            <li>Wordpress</li>
                                        </ul>

                                        <h5>Link:</h5>
                                        <a href="http://www.cluster.digital/">
                                            cluster.digital
                                        </a>

                                        <h5>Role + Responsibilities:</h5>
                                        <p>
                                            Cluster wanted to bring its selection of products under one umbrella name of
                                            Cluster Digital. After a meeting with the head of Cluster we agreed on the
                                            design and I set to work. Getting the blog to work was a new challenge that
                                            I feel I rose to well.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!---------------------------- Project - Visage Dental ------------------------------------>
                            <div class="project" id="visage-dental">
                                <div class="project-parallelogram-container">
                                    <div class="true-parallelogram"><img
                                                src="img/visage-dental-project-background.PNG"/>
                                        <div class="shade"></div>
                                    </div>
                                    <div class="project-title"><span>Visage Dental</span></div>
                                </div>

                                <div class="project-content">
                                    <div class="project-content-inner">
                                        <h5>Key Skills:</h5>
                                        <ul>
                                            <li>HTML 5</li>
                                            <li>SCSS</li>
                                            <li>Javascript</li>
                                        </ul>

                                        <h5>Link:</h5>
                                        <a href="http://www.visagedentalspa.co.uk/">
                                            visagedentalspa.co.uk
                                        </a>

                                        <h5>Role + Responsibilities:</h5>
                                        <p>
                                            Small projects like this allow me to experiment with new techniques and work
                                            out new best practices in my work. I’m particularly proud of how the
                                            responsive bios for the employees worked out.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="company-bottom-parallelogram-container">
                            <div class="rectangle"></div>
                            <div class="faux-parallelogram"></div>
                        </div>
                    </div>
                </div>


                <!-------------------------------------- Company - UWE ------------------------------------------------>
                <div id="uwe" class="company-container">
                    <div class="stripe"></div>
                    <div class="content-container">
                        <div class="company-top-parallelogram-container">
                            <div class="img-banner">
                                <img src="img/uwe_white.png"/>
                            </div>
                            <div class="faux-parallelogram"></div>
                        </div>

                        <div class="company-content">
                            <div class="company-details">
                                <div class="company-details-inner">
                                    <p>
                                        <span>Job Title:</span> Digital Media Student (September 2013 - June 2017)
                                    </p>
                                    <p>
                                        <span>Company:</span> University of the West of England
                                        (<a href="http://courses.uwe.ac.uk/G451/digital-media">http://courses.uwe.ac.uk/G451/digital-media</a>)
                                    </p>
                                    <p>
                                        <span>Location:</span> Bristol
                                    </p>
                                </div>
                            </div>

                            <!------------------------------- Project - Virtual Space --------------------------------->
                            <div class="project" id="vantage-cloud">
                                <div class="project-parallelogram-container">
                                    <div class="true-parallelogram"><img
                                                src="img/virtual-space-project-background.PNG"/>
                                        <div class="shade"></div>
                                    </div>
                                    <div class="project-title"><span>Virtual Space Project</span></div>
                                </div>

                                <div class="project-content">
                                    <div class="project-content-inner">
                                        <h5>Key Skills:</h5>
                                        <ul>
                                            <li>Unreal Engine 4 (VR)</li>
                                            <li>Blender (3D Modelling)</li>
                                            <li>Unreal Blueprints</li>
                                        </ul>

                                        <h5>Link:</h5>
                                        <p>
                                            Not Available
                                        </p>

                                        <h5>Role + Responsibilities:</h5>
                                        <p>
                                            This turned out fairly well considering it was my first foray into VR
                                            development. This was my chosen creative project in my final year at
                                            university exploring the constraints of physical space in Virtual Reality
                                            and the most immersive ways to overcome them.
                                        </p>

                                        <p>
                                            I found that movement mechanics tied to physical in-game objects created the
                                            most seamless immersion and conversely, tools that weren’t explained
                                            in-universe disrupted the player’s suspension of disbelief by separating
                                            movement and gameplay.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!----------------------------- Project - ACORN HelpMe ------------------------------------>
                            <div class="project" id="acorn-help">
                                <div class="project-parallelogram-container">
                                    <div class="true-parallelogram"><img
                                                src="img/acorn-helpme-project-background.PNG"/>
                                        <div class="shade"></div>
                                    </div>
                                    <div class="project-title"><span>Acorn HelpMe</span></div>
                                </div>

                                <div class="project-content">
                                    <div class="project-content-inner">
                                        <h5>Key Skills:</h5>
                                        <ul>
                                            <li>PHP</li>
                                            <li>JSON</li>
                                            <li>AJAX</li>
                                        </ul>

                                        <h5>Link:</h5>
                                        <a href="http://jp-dorman.co.uk/acorn_mail/">
                                            jp-dorman.co.uk/acorn_mail/
                                        </a>
                                        <a href="http://jp-dorman.co.uk/acorn_help/">
                                            jp-dorman.co.uk/acorn_help/
                                        </a>

                                        <h5>Role + Responsibilities:</h5>
                                        <p>
                                            This was a group project to work with a company that deals with
                                            disadvantaged people and create a technology to help them with their goals.
                                            We chose to work with Acorn Communities who provide services for people
                                            struggling with eviction.
                                        </p>

                                        <p>
                                            As the only member of the group with experienced coding abilities, I left
                                            the others to handle the written work and created a service consisting of
                                            two apps:
                                        </p>

                                        <ul>
                                            <li>Acorn Mailer: reads public data on people in housing crisis and mass
                                                sends letters by postcode using a third party mailing service.
                                            </li>
                                            <li> Acorn HelpMe: Is an app used by recipients of those letters to provide
                                                further details of their situation to Acorn and to read up on useful
                                                information applicable to their situation.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="company-bottom-parallelogram-container">
                            <div class="rectangle"></div>
                            <div class="faux-parallelogram"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <!-------------------------------------------- Education ------------------------------------------------------>
        <div id="education-section" class="page-section">

            <div class="width-restrict">
                <h2>Education</h2>


                <!------------------------------------------- UWE ----------------------------------------------------->
                <div id="school-uwe" class="school">
                    <div class="school-parallelogram-container">
                        <div class="true-parallelogram">
                            <img src="img/uwe_white.png" alt="uwe"/>
                        </div>
                    </div>

                    <div class="certificate-content">
                        <div class="certificate-content-inner">
                            <div class="certificate-title">
                                <div>BSc(Hons) 2:1 Digital Media</div>
                                <div>(September 2013 - June 2017)</div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--------------------------------------- Riddlesdown ------------------------------------------------->
                <div id="school-riddlesdown" class="school">
                    <div class="school-parallelogram-container">
                        <div class="true-parallelogram">
                            <img src="img/riddlesdown-school-project-background.PNG" alt="uwe"/>
                        </div>
                    </div>

                    <div class="certificate-content">
                        <div class="certificate-content-inner">
                            <div class="certificate-title">A-Level: Digital Media - B</div>
                            <div class="certificate-title">A-Level: ICT - C</div>
                            <div class="certificate-title">A-Level: Computing - C</div>
                        </div>
                    </div>
                </div>

                <!-------------------------------------- Riddlesdown 2 ------------------------------------------------>
                <div id="school-riddlesdown2" class="school">
                    <div class="school-parallelogram-container">
                        <div class="true-parallelogram">
                            <img src="img/riddlesdown-school-project-background.PNG" alt="uwe"/>
                        </div>
                    </div>

                    <div class="certificate-content">
                        <div class="certificate-content-inner">
                            <div class="certificate-title">GCSE: English - B</div>
                            <div class="certificate-title">GCSE: Mathematics - B</div>
                            <div class="certificate-title">GCSE: Sciences - B</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!----------------------------------------- Personal Interests ------------------------------------------------>
        <div id="interests-section" class="page-section">

            <div class="width-restrict">
                <h2>Personal Interests</h2>

                <div class="interests-content">
                    <div class="interests-content-inner">
                        <h5>Virtual Reality</h5>
                        <p>I have an extremely keen interest in Virtual Reality. My interest in the industry and the VR
                            projects I've worked on so far have been fueled by my love of testing out the finished
                            product and a passion for creating.
                        </p>

                        <p>
                            This passion for creation can be seen in the front end web development of my other projects
                            but VR is the next level of this desire to create. This has led me to purchase the HTC Vive
                            HMD to see what's out there and how I can compete.
                        </p>
                        <h5>PC Building</h5>
                        <p>
                            Along with VR comes the need for a powerful computer. I built my first gaming computer when
                            I was 19 and have been the "tech guy" for the rest of my friends ever since, providing help
                            and support with numerous builds over the years.
                        </p>
                        <h5>Parkour</h5>
                        <p>
                            Up until a sports injury I had been taking parkour lessons at Freedog in South Bristol.
                            These lessons were a brilliant way to let out extra energy after being sat at a desk all day
                            and I'll soon be looking to go back.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!-------------------------------------------- References ------------------------------------------------------>
        <div id="references-section" class="page-section">

            <div class="width-restrict">
                <h2>References</h2>

                <div class="reference-content">
                    <div class="reference-content-inner">
                        <div class="referee">
                            <h5>Keir Williams (UWE)</h5>
                            <p>
                                Dr Keir Williams MA MSc<br/>
                                Programme Leader Digital Media BSc<br/>
                                Senior Lecturer in Creative Technologies<br/>
                                University of the West of England<br/>
                                <span class="small-print">
                                    p: 01173287454 a:2Q20, Coldharbour Ln, Frenchay, BS16 1QY<br/>
                                    w: <a href="http://keirwilliams.com">keirwilliams.com</a> e: keir.williams@uwe.ac.uk
                                </span>
                            </p>
                            <p>

                            </p>



                        </div>
                        <p>
                            (More references available on request.)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer id="contact-section">
        <h2>Contact Me</h2>

        <div id="phone" class="contact-detail">
            <p>Email:</p>
            <address>
                <a href="mailto:j.p.dorman.jpd@gmail.com">j.p.dorman.jpd@gmail.com</a>
            </address>
        </div>
        <div id="linkedin" class="contact-detail">
            <p>LinkedIn:</p>
            <a href="https://www.linkedin.com/in/joe-parsons-dorman-a92655b0">www.linkedin.com/in/joe-parsons-dorman-a92655b0/</a>
        </div>
    </footer>
</section>

<script src="js/jqueryV3.2.1.js"></script>
<script src="js/slideshow.js"></script>
<script src="js/main.js"></script>
</body>
</html>
