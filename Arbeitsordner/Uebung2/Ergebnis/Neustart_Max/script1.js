/*global $, jQuery, alert*/
var test = $("#scrollNavBarUl");
var test2 = $("#scrollNavBarId");
var offset;
function scrollFunction() {
    "use strict";
    if (window.pageYOffset > 20) {
        test2.slideDown("slow");
        test2.children().slideDown("slow");
    } else {
        test2.css("display", "none");
    }
    test2.css("background , #000000");
}


window.onscroll = scrollFunction;
