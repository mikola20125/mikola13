var y = document.getElementById("4");
y.style = 'display:none';
var a = document.getElementById("3");
a.setAttribute('href','../contacts/contacts.php');
var z = document.getElementById("1");
z.setAttribute('href','../index.php');
var c = document.getElementById("2");
c.setAttribute('href','../catalog/catalog.php');
menu.onclick = function myFunction() {
    var x = document.getElementById("myTopnav");

    if (x.className === "topnav") {
    x.className += " responsive";
    } else {
    x.className = "topnav";
    }
}