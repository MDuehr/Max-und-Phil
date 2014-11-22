/*function validateLogin() {
    
    var a = document.forms["input"]["loginusername"].value;
    var b = document.forms["input"]["loginpassword"].value;
    var c = document.getElementById("useralert");
    
    if (a != "admin" || b != "12345") {
        c.style.display = "inherit";
    }
    else {
        c.style.display = "none";
    }
}

//AJAX hier vielleicht damit buttons nicht ganze seite refreshen?!

function validateRegister() {
    var a = document.forms["register"]["firstname"].value;
    var b = document.forms["register"]["lastname"].value;
    var c = document.forms["register"]["birthday"].value;
    var d = document.forms["register"]["yourusername"].value;
    var e = document.forms["register"]["yourpassword"].value;
    var f = document.getElementById("registeralert");
    
    if(a == null || b == null || d == null || e == null) {
        f.style.display = "inherit";
    }
    if(c == null || c != "") {
        f.style.display = "inherit";
    }
}




global alert
function validateLogin() {
    "use strict";
    alert("bitch");
}
*/

function validateLogin()
{
var a = document.loginVal.username.value;
var b = document.loginVal.password.value;
var c = document.getElementById("alert1");

if(a != "admin" || b != "123")
{
c.style.display="block";
}
else{
    c.style.display="none";
}
return false;
}

function validateRegister()
{
var a = document.registerVal.firstname.value;
var b = document.registerVal.lastname.value;
var c = document.registerVal.birthday.value;
var d = document.registerVal.username.value;
var e = document.registerVal.password.value;
var f = document.getElementById("alert2");
var g = document.getElementById("alert3");

if(a == "" || b == "" || d == "" || e == "")
{
f.style.display="block";


}
else{
    f.style.display="none";
}


  var pdate = c.split('-');

  var yy = parseInt(pdate[0]);
  var mm = parseInt(pdate[1]);
  var dd = parseInt(pdate[2]);

var Anrede;
Anrede = document.registerVal.firstname.value;
if((yy==1995 && mm>11 && dd>11) || yy>1995)
{
  g.style.display = "block";
}
else{
  f.style.display="none";
}

return false;
}