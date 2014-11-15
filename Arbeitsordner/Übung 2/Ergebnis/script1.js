function scrollFunction() {
    "use strict";
    var offset = window.pageYOffset;
    if (offset > 5) {
        document.getElementById("scrollNavBar2").style.visibility = "visible";
    } else {
        document.getElementById("scrollNavBar2").style.visibility = "hidden";
    }
}
window.onscroll = scrollFunction;