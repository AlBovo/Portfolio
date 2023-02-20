<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/static/style.css">
    <link rel="stylesheet" href="/static/termynal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<title>Alan Bovo</title>-->
</head>
<body class="fullscreen">
    <div>
        <div id="termynal" data-termynal class="container-fluid">
            <span data-ty="input" id="first-input">sudo apt update</span>
            <span data-ty="progress"></span>
            <span data-ty>[+] UPDATED!</span>
            <span data-ty="input">whoami</span>
            <span data-ty>An italian student and cybersecurity and competitive programming enthusiast</span>
        </div>          
    </div>
    <div class="text container-fluid d-flex justify-content-center">
        <div class="col align-self-center">
            <h1 class="d-flex justify-content-center">Projects</h1>
            <div class="d-flex justify-content-center align-items-top list">

            </div>
        </div>
    </div>
    <div class="text container-fluid d-flex justify-content-center">
        <div class="col align-self-center">
            <h1 class="d-flex justify-content-center">Awards</h1>
            <div class="d-flex justify-content-center align-items-top list">
                <div class="flex-shrink-0 img-fluid">    
                    <img src="/static/photo/oii.png">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h2>Olimpiadi Di Informatica</h2>
                    <a>In 2022 I've started learning C++ and its libraries for the "Olimpiadi Di Informatica", 
                        a challenge that every year makes highschool students be able to study complex data structures, algorithms 
                        and all kinds of other competitive programming stuff.
                        In the beginning I couldn't resolve much problems but after a few months I've started to understand so many things.
                    </a>
                    <!--<p>You can read my repo of the problem I resolved <a href="">here</a></p>-->
                    <span data-ty="input">2022: Finals 58th place, no medal</span>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-top list">
                <div class="flex-shrink-0 img-fluid">    
                    <img src="/static/photo/olicyber.png">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h2>Olimpiadi Di Cybersecurity</h2>
                    <a>In 2022 I've also started learning Python and its libraries (like pwntools, requests etc..) for the "Olimpiadi Di Cybersecurity", 
                        a challenge that every year makes highschool students be able to study things about  is a CTF Jeopardy where you must find the flag and submit it to the challenge's server.
                    </a>Scripting, Network Security, Web Security, Software Security and Cryptography.
                        This type of challenge
                    <span data-ty="input">//TODO: Still to see</span>
                </div>
            </div>
        </div>
    </div>
    <script src="/static/termynal.js" data-termynal-container="#termynal"></script>
</body>
</html>