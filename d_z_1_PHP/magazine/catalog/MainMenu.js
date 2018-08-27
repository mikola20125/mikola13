var a = document.getElementById("4");
a.setAttribute('href','../reviews/reviews.php');
var y = document.getElementById("2");
y.style = 'display:none';
var z = document.getElementById("1");
z.setAttribute('href','../index.php');
var c = document.getElementById("3");
c.setAttribute('href','../contacts/contacts.php');
menu.onclick = function myFunction() {
    var x = document.getElementById("myTopnav");

    if (x.className === "topnav") {
    x.className += " responsive";
    } else {
    x.className = "topnav";
    }
}
