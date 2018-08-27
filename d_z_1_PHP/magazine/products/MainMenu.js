var y = document.getElementById("1");
y.setAttribute('href','../index.php');
var z = document.getElementById("2");
z.setAttribute('href','../catalog/catalog.php');
var c = document.getElementById("3");
c.setAttribute('href','../contacts/contacts.php');
var b = document.getElementById("4");
b.setAttribute('href','../reviews/reviews.php');

menu.onclick = function myFunction() {
    var x = document.getElementById("myTopnav");

    if (x.className === "topnav") {
    x.className += " responsive";
    } else {
    x.className = "topnav";
    }
}