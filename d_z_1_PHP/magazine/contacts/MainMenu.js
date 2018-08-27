var y = document.getElementById("3");
y.style = 'display:none';
var z = document.getElementById("1");
z.setAttribute('href','../index.php');
var c = document.getElementById("2");
c.setAttribute('href','../catalog/catalog.php');
var b = document.getElementById('4');
b.setAttribute('href','../reviews/reviews.php');
menu.onclick = function myFunction() {
    var x = document.getElementById("myTopnav");

    if (x.className === "topnav") {
    x.className += " responsive";
    } else {
    x.className = "topnav";
    }
}