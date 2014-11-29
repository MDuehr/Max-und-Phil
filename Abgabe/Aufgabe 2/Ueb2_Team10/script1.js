/*global $, jQuery, alert*/
var navBackground = $("#scrollNavBarUl");
var navList = $("#scrollNavBarId");
var offset;
function scrollFunction() {
    "use strict";
    if (window.pageYOffset > 80) {
        navList.slideDown("fast");
        navBackground.slideDown("slow");
    } else {
        navList.css("display","none");
        navBackground.css("display", "none");
        
    }
    test2.css("background , #000000");
}


window.onscroll = scrollFunction;
