
var a = document.getElementsByClassName("hideSize");

var b = document.getElementById("table");

function hideSize() {
    'use strict';
    b.style.visibility = "hidden";
}

a.onclick = hideSize;
