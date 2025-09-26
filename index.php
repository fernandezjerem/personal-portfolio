<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
</head>
<style>
html {
    height: 100%;
    cursor:url("assets/default_arrow.png"), auto;
}

body {
    background-color: rgba(0, 0, 0, 1);
    color: rgba(255,255,255,1);
    margin: 0; /*removes default margin*/
    padding: 0;
    font-family: "Tahoma", sans-serif;
}

.wallpaper {
    background-image: url("assets/bg.jpeg"); /*linear-gradient(rgba(0,0,0,0.55),rgba(0,0,0,0.55)); /* Replace with your image URL */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.taskbar {
    background-image: url("assets/ui/taskbar.png");
    background-position: center;
    background-size: 100% 100%;
    /*height: 2.5%;*/
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #333333;
    display: flex;
    position: fixed;
    bottom: 0;
    width: 100%;
    align-items: center;
}
ul li {
    display: flex;
    align-items: center;
}
ul li a {
    display: block;
    color: white;
    padding: 9px 12px;
    text-decoration: none;
}

/*ul li a:hover {
    background-color: #111111;
}
ul li a.active {
    background-color: #04AA6D;
}*/
ul li.startButton {
    font-family: "Franklin Gothic", sans-serif;
    font-style: italic;
    background-image: url("assets/ui/startButton.png");
    background-position: center;
    background-size: 100% 100%;
    width: 6%;
    height: 100%;
}
ul li.startButton:hover {
    background-image: url("assets/ui/startButtonHover.png");
}
ul li.startButton.active {
    background-image: url("assets/ui/startButtonActive.png");
}
ul li.startButton a {
    display: flex;
    align-items: center;
    justify-content: left;
    gap: 1px;
    font-size: 1.25rem;
    overflow: hidden;
}
ul li.rightPos {
    margin-left: auto;
    background-image: url("assets/ui/taskbarClock.png");
    background-position: center;
    background-size: 100% 100%;
    align-items: top;
    height: 100%;
    align-self: stretch;
}
ul li.windowTask {
    background-image: url("assets/ui/taskbarWindowInactive.png");
    background-position: center;
    background-size: 100% 100%;
    height: 75%;
    display: inline-flex;
    align-items: center;
}
ul li.windowTask:hover {
    background-image: url("assets/ui/taskbarWindowHover.png");
}
ul li.windowTask.active {
    background-image: url("assets/ui/taskbarWindowActive.png");
}
ul li.windowTask img {
    height: 1rem;
    width: auto;
    flex-shrink: 0;
}
ul li.windowTask a {
    display: flex;
    align-items: center;
    justify-content: left;
    gap: 6px;
    color: white;
    padding: 9px 12px;
    text-decoration: none;
    overflow: hidden;
}

</style>
<body class="wallpaper" onload="updateClock(false); setInterval('updateClock()', 1000 )">
    <h1>Hi! This should have a BLUE gutter now.</h1>
    <p>Testing Github for CIT.010! (lol)</p>
    <h6>Small text here</h6>
    <h3>Initial commit!</h3>
    <h5>This is a new line!</h5>
    <ul class="taskbar">
    <li class="startButton">
        <a href="">
        <img src="assets/ui/WindowsLogo-small.png">start
        </a>
    </li>
    <li class="windowTask">
        <a href="">
        <img src="assets/ui/butterflyIcon.png">Home
        </a></li>
    <li class="windowTask">
        <a href="">
        <img src="assets/ui/infoIcon.png">About Me
        </a></li>
    <li class="windowTask">
        <a href="">
        <img src="assets/ui/projectsIcon.png">Projects
        </a></li>
    <li class="windowTask">
        <a href="">
        <img src="assets/ui/contactIcon.png">Contact
        </a></li>
    <li class="rightPos"><a href=""><span id="clock">&nbsp;</span></a></li>
    </ul>



    <script src="js/clock.js"></script>
</body>
</html>