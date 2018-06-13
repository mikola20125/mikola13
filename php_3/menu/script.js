menu.onclick = function myFunction() {
    var x = document.getElementById("myTop_nav");

    if (x.className === "top_nav") {
        x.className += " responsive";
    }else {
        x.className = "top_nav";
    }
}

/*
window.onload = function () {
    document.getElementById('menu').onclick = function () {
        var  x = document.getElementById('myTopnav');
        if (x.className === "topnav") {
            x.className += "responsive";
        } else {
            x.className = "topnav";
        }
    }
}﻿
*/
