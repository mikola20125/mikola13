var y = document.getElementById("1");
y.style = 'display:none';
menu.onclick = function myFunction() {
    var x = document.getElementById("myTopnav");

    if (x.className === "topnav") {
    x.className += " responsive";
    } else {
    x.className = "topnav";
    }
}