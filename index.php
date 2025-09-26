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
    cursor:url("assets/cursor.png"), auto;
}

window-interface {
    background-color:rgba(255,255,255,1);
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
    font-size: 75%;
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
ul li.rightPos {
    margin-left: auto;
    background-image: url("assets/ui/taskbarClock.png");
    background-position: center;
    background-size: 100% 100%;
    padding: 4px;
    align-self: stretch;
    align-items: center;
    display: flex;
}
ul li.rightPos a {
    display: flex;
    align-items: center;
    height: 100%;
    color: white;
}
ul li.startButton {
    background-image: url("assets/ui/startButton.png");
    background-position: center;
    background-size: 100% 100%;
    width: 6%;
    padding: 0%;
    align-self: stretch;
    align-items: center;
    display: flex;
}
ul li.startButton:hover {
    background-image: url("assets/ui/startButtonHover.png");
}
ul li.startButton.active {
    background-image: url("assets/ui/startButtonActive.png");
}
ul li.startButton a {
    font-family: "Franklin Gothic", sans-serif;
    font-style: italic;
    display: flex;
    align-items: center;
    height: 100%;
    justify-content: left;
    gap: 1px;
    color: white;
    font-size: 1.25rem;
    overflow: hidden;
    text-shadow: 2px 2px 5px black;
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
    height: 0.9rem;
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
    <window-interface
        icon="butterflyIcon"
        title="Introduction"
        content="hi"></window-interface>
    <window-interface
        img="assets/butterflyIcon.png"
        data-text="Your card validation code (CVC)
        is an extra security feature — it is the last 3 or 4 numbers on the
        back of your card."></window-interface>
    <ul class="taskbar">
    <li class="startButton">
        <a href="">
        <img src="assets/ui/WindowsLogo-small.png">start
        </a>
    </li>
    <li class="windowTask">
        <a href="">
        <img src="assets/butterflyIcon.png">Introduction
        </a></li>
    <li class="windowTask">
        <a href="">
        <img src="assets/infoIcon.png">About Me
        </a></li>
    <li class="windowTask">
        <a href="">
        <img src="assets/projectsIcon.png">Projects
        </a></li>
    <li class="windowTask">
        <a href="">
        <img src="assets/contactIcon.png">Contact
        </a></li>
    <li class="rightPos"><a href=""><span id="clock">&nbsp;</span></a></li>
    </ul>



    <script src="js/clock.js"></script>
    <script>
        class windowInterface extends HTMLElement {
        //static observedAttributes = ["title","content"];
            constructor() {
                super();
            }

            connectedCallback() {
                // Create a shadow root
                const shadow = this.attachShadow({ mode: "open" });

                // Create spans
                const wrapper = document.createElement("span");
                wrapper.setAttribute("class", "wrapper");

                const icon = document.createElement("span");
                icon.setAttribute("class", "icon");
                icon.setAttribute("tabindex", 0);

                const info = document.createElement("span");
                info.setAttribute("class", "info");

                // Take attribute content and put it inside the info span
                const text = this.getAttribute("data-text");
                info.textContent = text;

                // Insert icon
                let imgUrl;
                if (this.hasAttribute("img")) {
                imgUrl = this.getAttribute("img");
                } else {
                imgUrl = "img/default.png";
                }

                const img = document.createElement("img");
                img.src = imgUrl;
                icon.appendChild(img);

                // Create some CSS to apply to the shadow dom
                const style = document.createElement("style");
                console.log(style.isConnected);

                style.textContent = `
                .wrapper {
                    position: relative;
                }

                .info {
                    font-size: 0.8rem;
                    width: 200px;
                    display: inline-block;
                    border: 1px solid black;
                    padding: 10px;
                    background: white;
                    border-radius: 10px;
                    opacity: 0;
                    transition: 0.6s all;
                    position: absolute;
                    bottom: 20px;
                    left: 10px;
                    z-index: 3;
                }

                img {
                    width: 1.2rem;
                }

                .icon:hover + .info, .icon:focus + .info {
                    opacity: 1;
                }
                `;

                // Attach the created elements to the shadow dom
                shadow.appendChild(style);
                console.log(style.isConnected);
                shadow.appendChild(wrapper);
                wrapper.appendChild(icon);
                wrapper.appendChild(info);
            }


            attributeChangedCallback(name, oldValue, newValue) {
                console.log(
                `Attribute ${name} has changed from ${oldValue} to ${newValue}.`,
                );
            }
        // Element functionality written in here
        }
        customElements.define("window-interface", windowInterface);
    </script>
</body>
</html>