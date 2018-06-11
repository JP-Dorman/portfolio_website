<?php
$employers = [
    ["81227401", "
        <p>Joe Parsons-Dorman - A web developer of 2 years with a B.Sc(Hons) in Digital Media. Looking to jump in on the ground floor of the web VR/AR industry as a JavaScript developer.</p>
        <p>Web development is my current job but VR/AR is my passion, my projects below are a demonstration of my JavaScript, VR and front end design/dev experience.</p>
    "],
    ["49271630", "
        <p>Joe Parsons-Dorman - A web developer of 2 years with a B.Sc(Hons) in Digital Media. Looking to jump in on the ground floor of the web VR/AR industry as a JavaScript developer.</p>
        <p>Although I currently live in Bristol, I was raised in London and would be willing to move back for the sake of this great opportunity.</p>
        <p>I'm extremely eager to be involved, take pride in my work and go the extra mile to get along with everybody I meet.</p>
    "],
    ["50284756", "
        <p>Joe Parsons-Dorman - A web developer of 2 years with a B.Sc(Hons) in Digital Media. Looking to jump in on the ground floor of the web VR/AR industry as a JavaScript developer.</p>
        <p>Although I currently live in Bristol, I was raised in London and would be willing to move back for the sake of this great opportunity.</p>
        <p>
            Although I've never shipped a licensed title, I have a small practice project available at <a href='http://jp-dorman.co.uk/aframe-tests/3/'>http://jp-dorman.co.uk/aframe-tests/3</a>
            and have experience developing in Unreal Engine 4 using Blueprints (See below under Work > UWE > Virtual Space Project).
        </p>
    "],
    ["89380460", "
        <p>Joe Parsons-Dorman - A web developer of 2 years with a B.Sc(Hons) in Digital Media. Looking to jump in on the ground floor of the web VR/AR industry as a JavaScript developer.</p>
        <p>Although AR/VR using Three.js and A-Frame is my primary interest, the bulk of my experience is in the HTML DOM, its intricacies and its idiosyncrasies, which I would be happy to share with any junior developers.</p>
        <p>I currently live in Bristol but would be willing to move to Manchester for the sake of this great opportunity.</p>
        <p>
            As you can see below, although I focus on front end web development my experience is wide and varied, from cloud software to AR/VR games. I think this range of experience makes me perfect for this job.
        </p>
    "],
    ["35841553", "
        <p>Joe Parsons-Dorman - A web developer of 2 years with a B.Sc(Hons) in Digital Media. Looking to jump in on the ground floor of the web VR/AR industry as a JavaScript developer.</p>
        <p>Web development is my current job but VR/AR is my passion, my projects below are a demonstration of my JavaScript and front end design/dev experience.</p>
        <p>I have experience in GIT version control, have worked on full lifecycle projects, have worked with Paypal andTwitter APIs and have made steps within my company to adopt a more agile approach.</p>
        <p>My experience with React is unfortunately a little lacking, but I would actually be very excited to learn it in my spare time.</p>
        <p>I have 2 years of experience in JavaScript through my current employer Layered Technologies as well as various university projects.</p>
        <p>I currently live in Bristol but would be willing to move to Leeds for the sake of this great opportunity.</p>
    "],
    ["91041631", "
        <p>Joe Parsons-Dorman - A web developer of 2 years with a B.Sc(Hons) in Digital Media. Looking to jump in on the ground floor of the web VR/AR industry as a JavaScript developer.</p>
        <p>Web development is my current job but VR/AR is my passion, my projects below are a demonstration of my JavaScript, VR and front end design/dev experience.</p>
        <p>I have built front ends for cloud softwares, created VR tech demos in Unreal Engine and A-Frame, created my own REST API and worked with both Twitter and Paypal APIs.</p>
        <p>Although I currently live in Bristol, I have lived in London and would be willing to move back for the sake of this great opportunity.</p>
    "],
    ["62784505", "
        <p>I have 2 years of experience as a Web Developer and have worked with bleeding edge VR technology. I also have a degree with honours in Digital Media from the University of the West of England.</p>
        <p>I have a genuine passion for my work and regularly create projects in my spare time with the goal of improving my skills, exploring new technologies to stay ahead of current trends and learning to better mesh with the technological requirements of my workplace.</p>
    "],
];

foreach ($employers as $employer) {
    $html = '
    <div id="personal-statement" class="page-section">
        <div class="width-restrict">
            <h2>Personal Statement</h2>
            <div id="statement-container">
                <div id="speech-bubble-container">
                    <div id="speech-bubble">
                        <span>'
        . $employer[1] .
        '</span>
                    </div>
                    <div id="bubble-triangle"></div>
                </div>
        
                <div id="joe-container"></div>
            </div>
        </div>
    </div>';

    if ($employer[0] == $hash) {
        echo($html);
    }
}
?>




