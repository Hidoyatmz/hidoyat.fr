var navbar = document.getElementById("navbar");
let done = false;
let pollDone = false;
window.onscroll = function () {
    "use strict";
    let height = document.documentElement.scrollHeight;
    if(!pollDone && (height == (window.scrollY + window.innerHeight))){
        pollDone = true;
        showPoll();
    }
    if (window.scrollY >= 200) {
        if (!done) {
            done = true;
            navbar.classList.add("navbar-scrolled");
        }
    } else if (done) {
        done = false;
        navbar.classList.remove("navbar-scrolled");
    }
};

function dismissPoll() {
    let popup = document.getElementById("poll-popup");
    popup.style.display = "none";
}

function showPoll(){
    let popup = document.getElementById("poll-popup");
    popup.style.display = "flex";
}