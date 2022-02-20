var navbar = document.getElementById("navbar");
let done = false;
let pollDone = false;
window.onscroll = function () {
    "use strict";
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
